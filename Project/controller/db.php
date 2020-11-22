<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "coffeeshop";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$email,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $email."' AND Password='". $password."'");
 return $result;
 }
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>