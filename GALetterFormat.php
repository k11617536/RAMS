<?php
   if(isset($_POST['submit']))
   {
    $file = $_FILES['GaLetterFormat'];
	$fileName = $_FILES['GaLetterFormat']['name'];
    $fileTmpName = $_FILES['GaLetterFormat']['tmp_name'];
	$fileSize = $_FILES['GaLetterFormat']['size'];
	$fileError = $_FILES['GaLetterFormat']['error'];
	$fileType = $_FILES['GaLetterFormat']['type'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('docx', 'pdf');
	
	if(in_array($fileActualExt, $allowed))
	{
	 if($fileError === 0)
	 {
	    if($fileSize < 1000000)
		{
		 $fileNameNew = uniqid('',true).".".$fileActualExt;
		 $fileDestination = 'Grades/GM'.$fileNameNew;
		 move_uploaded_file($fileTmpName, $fileDestination);
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