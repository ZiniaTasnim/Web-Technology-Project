<?php
include('../controller/db.php');
session_start(); 
if(empty($_SESSION["Email"])) 
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
    
<br>
<p style="font-size:50px;" align="center"><span> Welcome to your Dashboard</span></p>
<p style="font-size:30px;" align="left"> <span> Your Information </span></p>


<style>
body {
  background-image: url('Coffee.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

span {
  background-color: rosybrown;
}
</style>


<p> <span>
<?php

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"customer",$_SESSION["Email"], $_SESSION["Password"]);

if ($userQuery->num_rows > 0)
{
  
  while($row=$userQuery->fetch_assoc())
  {
  
      echo "Name : ".$row["Firstname"]." ".$row["Lastname"]."</br>";
      echo "Email : ".$row["Email"]."</br>";
      echo "Address : ".$row["Address"]."</br>";
      echo "Email : ".$row["Email"]."</br>";
      echo "Gender : ".$row["Gender"]."</br>";
      echo "Contact Information : ".$row["ContactInfo"]."</br>";
      echo "Date of Birth : ".$row["DateofBirth"]."</br>";
  }
  
}
else
{
   echo "0 results";
}
?>
</span></p>

<style>
    *{
        box-sizing:border-box
    }
    .child{ border: 1px solid transparent;
            float:left;
            width:50%;
          }
          
</style>



<section>
    <section class="child">
    <br>
    <p style="font-size:30px;" align="left"> <span> Which Coffee Would You Like Today?</span></p>
    <br>
    <img src="Menu.png" width="572" height="613">
    </section>

    <section class="child">
    <form id="MyForm" method="post" action= "delivery.php">
    <p> <span><br><br><br>
        <label >ESPRESSO:</label>
        <select name="espresso">
            <option value="none" selected disabled hidden>Select Any</option>
            <option value="Espresso">Espresso</option>
            <option value="Americano">Americano</option>
            <option value="Cappuccino">Cappuccino</option>
            <option value="Caramel Macchiato">Caramel Macchiato</option>
            <option value="Hazelnut Latte">Hazelnut Latte</option>
        </select>    
        <label>Select quantity</label><input type="number" name="equantity">
        </span> 
    </p>

    <p> <span><br>
        <label >ICED DRINKS:</label>
        <select name="iced">
            <option value="none" selected disabled hidden>Select Any</option>
            <option value="Iced Coffee">Iced Coffee</option>
            <option value="Iced Americano">Iced Americano</option>
            <option value="Iced Latte">Iced Latte</option>
            <option value="Iced Mocha">Iced Mocha</option>
            <option value="Iced Caramel Macchiato">Iced Caramel Macchiato</option>
        </select>    
        <label>Select quantity</label><input type="number" name="iquantity">
        </span> 
    </p>

    <p> <span><br>
        <label >HOMEMADE GELATO:</label>
        <select name="gelato">
            <option value="none" selected disabled hidden>Select Any</option>
            <option value="Belgian Chocolate">Belgian Chocolate</option>
            <option value="Cheesecake">Cheesecake</option>
            <option value="Cookie Butter">Cookie Butter</option>
            <option value="Cookies and Cream">Cookies and Cream</option>
            <option value="Cream Cheese">Cream Cheese</option>
        </select>    
        <label>Select quantity</label><input type="number" name="gquantity">
        </span> 
    </p>

    <p> <span><br>
        <label >BREWS:</label>
        <select name="brews">
            <option value="none" selected disabled hidden>Select Any</option>
            <option value="White Cold Brew">White Cold Brew</option>
            <option value="Black cold Brew">Black Cold Brew</option>
            <option value="Brewed Coffee">Brewed Coffee</option>
        </select>    
        <label>Select quantity</label><input type="number" name="bquantity">
        </span> 
    </p>

    <p> <span><br>
        <label >DESSERTS:</label>
        <select name="desserts">
            <option value="none" selected disabled hidden>Select Any</option>
            <option value="Affogato">Affogato</option>
            <option value="Apple Pie a la Mode">Apple Pie a la Mode</option>
            <option value="Classic Parfait">Classic Parfait</option>
        </select>    
        <label>Select quantity</label><input type="number" name="dquantity">
        </span> 
    </p>

    <p> <span><br>
        <label >CAKES:</label>
        <select name="cake">
            <option value="none" selected disabled hidden>Select Any</option>
            <option value="Classic Sans Rival">Classic Sans Rival</option>
            <option value="Carrot Cake">Carrot Cake</option>
            <option value="Honeycomb Cake">Honeycomb Cake</option>
            <option value="Decadent Chocolate Cake">Decadent Chocolate Cake</option>

        </select>    
        <label>Select quantity</label><input type="number" name="cquantity">
        </span> 
    </p>





    <br>
    <input type="submit" value="Place Order">
    <br><br><br><br><br><br><br><br> 

    </form>
    
    </section>

    <p style="font-size:20px;" align="left"> <span> Do you want to <a href="../controller/logout.php">logout?</span></p>

</body>
</html>

<?php


?>   


