<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffeeshop";
$conn = new mysqli($servername, $username, $password, $dbname);
$qry = "CREATE TABLE customer (
Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Firstname VARCHAR(30) NOT NULL,
Lastname VARCHAR(30) NOT NULL,
Password VARCHAR(30) NOT NULL,
Email VARCHAR(50) NOT NULL,
Address VARCHAR(50) NOT NULL,
DateofBirth VARCHAR(50) NOT NULL,
Gender VARCHAR(50) NOT NULL,
ContactInfo int(11) NOT NULL
)";
$res = $conn->query($qry);
if($res)
{ echo "table created successfully"; }
else
{ echo "error occurred"; }
$conn->close();
?>