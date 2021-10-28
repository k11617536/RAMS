<?php

 
   if(isset($_POST['submit']))
   {
   $server = "localhost";
 $username = "root";
$password = "";
$dbname = "concerndb";
$con=mysqli_connect($server,$username,$password,$dbname);
 // Check connection
  if (mysqli_connect_errno())
  {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
    $time = date('Y-m-d H:i:s');
 
    $file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('docx', 'pdf');
	
	if(in_array($fileActualExt, $allowed))
	{
	 if($fileError === 0)
	 {
	    if($fileSize < 1000000)
		{
		$result = mysqli_query($con,"SELECT * FROM tblstudent");
         while($row = mysqli_fetch_array($result)){
	
		 $fileNameNew = date('m-d-Y H i sa ')."-".$row['umakid']."-".$row['lname']."-".$row['fname']."-".$fileName.".".$fileActualExt;
		 $fileDestination = 'upload/'.$fileNameNew;
		 move_uploaded_file($fileTmpName, $fileDestination);
		 }
		 header("Location: index-user.html?uploadsucess");
		}else{
		  echo "your file is too big";
		}
	 }else{
	    echo "There was an error uploading your file";
	 }
	}else{
	  echo "you cannot upload files of this type";
	}
	
	

	
   }
?>