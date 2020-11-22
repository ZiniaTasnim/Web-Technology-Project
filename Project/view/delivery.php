<!DOCTYPE html>
<html>
<body>

<p style="font-size:25px;" align="Center"> YOUR SELECTED ORDER:</p>

<br>

<table align="center">
    <tr>
        <td>
                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!empty($_POST["espresso"])) 
                    {
                        echo $_POST["espresso"];?> ---------- x <?php echo $_POST["equantity"];
                        echo "<br><br>";
                    }
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!empty($_POST["iced"])) 
                    {
                        echo $_POST["iced"]; ?> ---------- x <?php echo $_POST["iquantity"];
                        echo "<br><br>";
                    }
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!empty($_POST["gelato"])) 
                    {
                        echo $_POST["gelato"]; ?> ---------- x <?php echo $_POST["gquantity"];
                        echo "<br><br>";
                    }
                }


                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!empty($_POST["brews"])) 
                    {
                        echo $_POST["brews"]; ?> ---------- x <?php echo $_POST["bquantity"];
                        echo "<br><br>";
                    }
                }


                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!empty($_POST["desserts"])) 
                    {
                        echo $_POST["desserts"]; ?>---------- x <?php echo $_POST["dquantity"];
                        echo "<br><br>";
                    }
                }


                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!empty($_POST["cake"])) 
                    {
                        echo $_POST["cake"]; ?>  ---------- x <?php echo $_POST["cquantity"];
                        echo "<br><br>";
                    }
                }
                ?>

        </td>
    </tr>
</table>
<table align="center">
    <tr>
        <td>
        <input  type="button" value="Go back" onclick="history.back()">
        </td>
    </tr>
</table>





