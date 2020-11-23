<?php
include('../controller/regcheck.php');

if(isset($_SESSION['fname']))
{
header("location: ../controller/reginsert.php");
}
?>

<!DOCTYPE html>
<html>
<body>



<h2 align="center" style="font-size:30px;">Customer Registration</h2>

<form action="" align="center" method="post">
    
    <table align="center">
        <tr>
            <td><label>First Name</label></td>
            <td><label>:</label> <input type="text" name="fname" required>
            <p><font color=red><?php echo $fnameErr;?></font></p>
            </td>
        </tr>
        <tr>
            <tr><td><hr style="width:250%"></td></tr></tr>
        <tr>
            <td><label>Last Name</label></td>
            <td><labe>:</label><input type="text" name="lname" required>
            <p><font color=red><?php echo $fnameErr;?></font></p>
            </td>
        </tr>
        <tr><td><hr style="width:250%"></td></tr>
        <tr>
            <td><label>Email</label></td>
            <td><labe>:</label><input type="text" name="email" required><br><?php echo $emailErr;?></td>
        </tr>
        <tr><td><hr style="width:250%"></td></tr>
        <tr>
            <td><label>Password</label></td>
            <td><labe>:</label><input type="password" name="pass" required></td>
        </tr>
        <tr><td><hr style="width:250%"></td></tr>
        <tr>
            <td><label>Confirm Password</label></td>
            <td><labe>:</label><input type="password" name="conpass" required></td>
        </tr>
        <tr><td><hr style="width:250%"></td></tr>
        <tr>
            <td><label>Address</label></td>
            <td><labe>:</label><input type="text" name="address" required></td>
        </tr>
        <tr><td><hr style="width:250%"></td></tr>
        <tr>
            <td><label>Contact Number</label></td>
            <td><labe>:</label><input type="text" name="contact" required></td>
        </tr>
        <tr><td><hr style="width:250%"></td></tr>
    </table>
    
    
    <legend>Gender</legend>
    <table align="center">
        <tr>
            <td>
                <input type="radio" name="gender" value="Female" checked>Female
                <input type="radio" name="gender" value="Male" >Male
                <input type="radio" name="gender" value="Other">Other

            </td>
        </tr>
    </table>
   
    
    <legend>Date of Birth</legend>
    <table align="center">
        <tr><td><hr style="width:50%"></td></tr>
        <tr>
            <td><input type="date" size="3" name="date" required><br><br></td>
        </tr>
        <tr><td><hr style="width:50%"></td></tr>

    </table>  
    


<input name="submit" type="submit" value="Confirm Registration"> <br> <br> <br>
<label><a href="login.php">Go Back</label>

</form>   
</body>
</html>