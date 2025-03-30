<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Functions 5</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Functions in PHP."/>
    <meta name="keywords" content="PHP, Functions"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <form action="index17_functions5.php" method="post">
    
        <label>Enter base(above):</label><br/>
        <input type="number" name="base_above"/><br/>

        <label>Enter base(below):</label><br/>
        <input type="number" name="base_below"/><br/>

        <label>Enter height:</label><br/>
        <input type="number" name="height"/><br/><br/>

        <input type="submit" name="enter" value="Enter"/><br/>

    </form><br/><br/>

</body>
</html>

<?php

    if(isset($_POST["enter"])){

        $base_above = $_POST["base_above"];
        $base_below = $_POST["base_below"];
        $height = $_POST["height"];

        // float = forcing the data type to avoid string inputs.
        function trapezoid_area(float $base_above, float $base_below, float $height){
            
            $area = ($base_above + $base_below) / 2 * $height;

            return $area;
        }
        
        // Trapezoid area = a + b / 2 * h
        echo"({$base_above} + {$base_below}) / 2 * {$height} = " . trapezoid_area($base_above, $base_below, $height) . "<br/>";

    }


?>