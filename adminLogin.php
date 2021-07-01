<?php

session_start();


if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index-admin.php");
    exit;
}
 

require_once "dbconn.php";

try
{
  if(isset($_POST["submit"]))
  {
    if(empty($_POST["email"]) && ($_POST["pwd"]))
	{
	 $message = '<label>All fields are required</label>';  
	
	}
	else
	{
	 $sql_query = "SELECT * FROM tbladmin WHERE email = :email AND pwd = :pwd";
	 $stmt = $pdo->prepare($sql_query);
	 $stmt->execute(
	   array(
	       'email' => $_POST["email"],
		   'pwd'   => $_POST["pwd"]
	    )
	   );
	 $count = $stmt->rowCount();
	 if($count > 0)
	  {
	    session_start();
		$_SESSION["loggedin"] = true;
	    $_SESSION["email"] = $_POST["email"];
		header("location: index-admin.php");
	  }
	 else
	 {
	    $message = '<label>Wrong Data</label>';  
	 }
	}
   
  }
}
catch(PDOException $error)
{
   $message = $error->getMessage();
}

?>