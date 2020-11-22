<?php
include('db.php');
session_start(); 

 $error="";

if (isset($_POST['submit'])) {
if (empty($_POST['Email']) || empty($_POST['Password'])) {
$error = "Email or Password is invalid";
}
else
{

$email=$_POST['Email'];
$password=$_POST['Password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"customer",$email,$password);

if ($userQuery->num_rows > 0) {

$_SESSION["Password"] = $password;
$_SESSION["Email"] = $email;
   }
 else {
$error = "Email or Password is invalid";
}
$connection->CloseCon($conobj);

}
}


?>
