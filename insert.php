

<?php 
include "dbconn.php";

try{


 $sql_query = "INSERT INTO tblstudent(umakid,fname,lname,email,connum,college,program,concern,message) 
 VALUES(:umakid,:fname,:lname,:email,:connum,:college,:program,:concern,:message)";
 
 $stmt = $pdo->prepare($sql_query);
 
 $stmt->bindParam(':umakid', $_REQUEST['umakid']);
 $stmt->bindParam(':fname', $_REQUEST['fname']);
 $stmt->bindParam(':lname',$_REQUEST['lname']);
 $stmt->bindParam(':email',$_REQUEST['email']);
 $stmt->bindParam(':connum',$_REQUEST['connum']);
 $stmt->bindParam(':college',$_REQUEST['college']);
 $stmt->bindParam(':program',$_REQUEST['program']);
 $stmt->bindParam(':concern',$_REQUEST['concern']);
 $stmt->bindParam(':message',$_REQUEST['message']);
 

 $stmt->execute();
 echo "Your request has been sent.";
 }catch(PDOException $e){
 die("ERROR: could not execute $sql_query. ".$e->getMessage());
 }
 
 unset($pdo);
 



//make the string secure
/*$umakid  = mysqli_real_escape_string($conn,$_POST['umakid']);
$fname   = mysqli_real_escape_string($conn,$_POST['fname']);
$lname   = mysqli_real_escape_string($conn,$_POST['lname']);
$email   = mysqli_real_escape_string($conn,$_POST['email']);
$connum  = mysqli_real_escape_string($conn,$_POST['connum']);
$college = mysqli_real_escape_string($conn,$_POST['college']);
$program = mysqli_real_escape_string($conn,$_POST['program']);
$concern = mysqli_real_escape_string($conn,$_POST['concern']);
$message = mysqli_real_escape_string($conn,$_POST['message']);*/

//mysqli prepared statements
//$stmt = $conn->prepare("INSERT into `tblstudent`(`umakid`,`fname`,`lname`,`email`,`connum`,`college`,`program`,`concern`,`message`)
//VALUES(?,?,?,?,?,?,?,?,?)");
//$stmt->bind_param("sssssssss",$umakid,$fname,$lname,$email,$connum,$college,$program,$concern,$message);
//$stmt->execute();

//$stmt->close();
//$conn->close();
//echo "Form submitted successfully";



?>

<?php 

?>