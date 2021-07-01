<?php 
//db connection
$server = "localhost";
$username = "root";
$password = "";
$dbname  = "concerndb";

$conn = mysqli_connect($server, $username, $password, $dbname);

//check db connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//make the string secure
$umakid  = mysqli_real_escape_string($conn,$_POST['umakid']);
$fname   = mysqli_real_escape_string($conn,$_POST['fname']);
$lname   = mysqli_real_escape_string($conn,$_POST['lname']);
$email   = mysqli_real_escape_string($conn,$_POST['email']);
$connum  = mysqli_real_escape_string($conn,$_POST['connum']);
$college = mysqli_real_escape_string($conn,$_POST['college']);
$program = mysqli_real_escape_string($conn,$_POST['program']);
$concern = mysqli_real_escape_string($conn,$_POST['concern']);
$message = mysqli_real_escape_string($conn,$_POST['message']);

//mysqli prepared statements
$stmt = $conn->prepare("INSERT into `tblstudent`(`umakid`,`fname`,`lname`,`email`,`connum`,`college`,`program`,`concern`,`message`)
VALUES(?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssss",$umakid,$fname,$lname,$email,$connum,$college,$program,$concern,$message);
$stmt->execute();

$stmt->close();
$conn->close();
echo "Form submitted successfully";


?>