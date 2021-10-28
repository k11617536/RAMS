<?php 

include "dbconn.php";

try{


 $sql_query = "INSERT INTO tbladmin(employee_id,email,password) 
 VALUES(:employee_id,:email,:password)";
 
 $stmt = $pdo->prepare($sql_query);
 
 $stmt->bindParam(':employee_id', $_REQUEST['employee_id']);
 $stmt->bindParam(':email', $_REQUEST['email']);
 $stmt->bindParam(':password',$_REQUEST['password']);

 

 $stmt->execute();
 echo "Your request has been sent.";
 }catch(PDOException $e){
 die("ERROR: could not execute $sql_query. ".$e->getMessage());
 }
 
 unset($pdo);
 

?>