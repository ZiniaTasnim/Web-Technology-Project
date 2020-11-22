<?php
include('../controller/logincheck.php');

if(isset($_SESSION['Email'])){
header("location: Dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<style>
body {
  background-image: url('Coffee2.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<br><br><br><br><br>
<h2 align="center">Consumer Login</h2>

<form action="" align="center" method="post">
    <input type="text" name="Email" placeholder="Enter your Email Address" required><br><br>
    <input type="password" name="Password" placeholder="Enter your password" required><br><br>
    <input name="submit" type="submit" value="LOGIN"> <br> <br> <br>
    <label>Not Registerted yet? <a href="registration.php">Register Here</label>
</form>
<br>
<?php echo $error; ?>

</body>
</html>