<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffeeshop";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$qry = "INSERT INTO customer (Firstname, Lastname, Password, Email, Address,DateofBirth, Gender, ContactInfo)
VALUES ('Hermione','Granger',111,'hermione@mail.com','Bashundhara','1979-09-19','female','01487596128')";
$res = $conn->query($qry); //execute query
if($res)
{ echo "new record inserted"; }
else
{ echo "error occurred"; }
$conn->close();
?>