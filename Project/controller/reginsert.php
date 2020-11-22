<?php
include('regcheck.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffeeshop";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 


$qry = "INSERT INTO customer (Firstname, Lastname, Password, Email, Address,DateofBirth, Gender, ContactInfo)
VALUES ('$_SESSION[fname]','$_SESSION[lname]', '$_SESSION[conpass]', '$_SESSION[email]', '$_SESSION[address]', '$_SESSION[date]', '$_SESSION[gender]', '$_SESSION[contact]' )";
$res = $conn->query($qry); //execute query
if($res)
{ echo "new record inserted"; echo "<br> <br>";
    echo "REGISTRATION SUCESSFUL!! PROCEED TO LOG IN"; echo "<br> <br>";
    echo "<a href='../view/login.php'>Link</a>";
    session_destroy();
}
else
{ echo "error occurred"; }
$conn->close();

?>