
<?php
include('db.php');
session_start(); 

$fnameErr = $lnameErr = $emailErr = $passErr = $conpassErr= $genderErr = $addressErr =$contactErr = "";
$fname = $lname = $email = $pass =$conpass = $address = $gender = $contact =  "";


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit']))
{

    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);



    if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
        $fnameErr = "Only letters and white space allowed";
    } else {
        $_SESSION["fname"] = $_POST["fname"];
    }

    if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
        $lnameErr = "Only letters and white space allowed";
    } else {
        $_SESSION["lname"]= $_POST["lname"];
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $_SESSION["email"] = $_POST["email"];
    }

    $_SESSION["conpass"] = $_POST["conpass"];
    $_SESSION["address"] = $_POST["address"];
    $_SESSION["date"] = $_POST["date"];
    $_SESSION["gender"] = $_POST["gender"];
    $_SESSION["contact"] = $_POST["contact"];

}
?>