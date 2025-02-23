<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP | Math Functions 2</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Utilizing PHP Math Functions"/>
    <meta name="keywords" content="PHP, Math, Functions"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <form action="index5_math_functions2.php" method="post">

        <label>Circumference</label><br/>
        <input type="number" name="circumference"/><br/><br/>

        <input type="submit" value="Compute"/>

    </form><br/>

</body>
</html>


<?php

    $circumference = $_POST["circumference"];
    
    $pi = pi();
    $pi_times_2 = null;
    
    $radius = null;

    

    $radius = $circumference / (2 * $pi);
    $pi_times_2 = 2 * $pi;
    
    echo"Radius = {$circumference} / (2 * pi)<br/>";
    echo"Radius = {$circumference} / (2 * {$pi})<br/>";
    echo"Radius = {$circumference} / ({$pi_times_2})<br/><br/>";

    
    $radius = round($radius, 3);
    echo"Radius: {$radius}cm<br/>";

?>