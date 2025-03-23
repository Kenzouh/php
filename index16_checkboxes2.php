<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Checkboxes 2</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Checkboxes in PHP."/>
    <meta name="keywords" content="PHP, Checkboxes, Forms"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <form action="index16_checkboxes2.php" method="post">

                                 <!-- Array since checkboxes -->
        <input type="checkbox" name="vegetables[]" value="Asparagus"/>
        <label>Asparagus</label><br/>

        <input type="checkbox" name="vegetables[]" value="Broccoli"/>
        <label>Broccoli</label><br/>

        <input type="checkbox" name="vegetables[]" value="Cauliflower"/>
        <label>Cauliflower</label><br/>

        <input type="checkbox" name="vegetables[]" value="Eggplant"/>
        <label>Eggplant</label><br/>

        <input type="checkbox" name="vegetables[]" value="Garlic"/>
        <label>Garlic</label><br/>

        <input type="checkbox" name="vegetables[]" value="Mushroom"/>
        <label>Mushroom</label><br/>

        <input type="checkbox" name="vegetables[]" value="Potato"/>
        <label>Potato</label><br/>

        <input type="checkbox" name="vegetables[]" value="Rhubarb"/>
        <label>Rhubarb</label><br/>

        <input type="checkbox" name="vegetables[]" value="Spinach"/>
        <label>Spinach</label><br/>

        <input type="checkbox" name="vegetables[]" value="Turmeric"/>
        <label>Turmeric</label><br/>

        <input type="checkbox" name="vegetables[]" value="Yam"/>
        <label>Yam</label><br/><br/>

        <input type="submit" name="confirm" value="Confirm"/><br/>
    </form><br/>


</body>
</html>


<?php

    echo"<h3 style='color: blue;'>Manual printing:</h3>";
    
    if(isset($_POST["confirm"])){
        $vegetables = $_POST["vegetables"];
        echo"\$vegetables: " . $vegetables . "<br/><br/>";

        echo"\$vegetables[0]: " . $vegetables[0] . "<br/>";
        echo"\$vegetables[1]: " . $vegetables[1] . "<br/>";
        echo"\$vegetables[2]: " . $vegetables[2] . "<br/>";
        echo"\$vegetables[3]: " . $vegetables[3] . "<br/>";
        echo"\$vegetables[4]: " . $vegetables[4] . "<br/>";
        echo"\$vegetables[5]: " . $vegetables[5] . "<br/>";
        echo"\$vegetables[6]: " . $vegetables[6] . "<br/>";
        echo"\$vegetables[7]: " . $vegetables[7] . "<br/>";
        echo"\$vegetables[8]: " . $vegetables[8] . "<br/>";
        echo"\$vegetables[9]: " . $vegetables[9] . "<br/>";
        echo"\$vegetables[10]: " . $vegetables[10] . "<br/>";
    }
    
?>