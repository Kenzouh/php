<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP | Math Functions</title>

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

    <form action="index5_math_functions.php" method="post">

        <label>Enter number 1:</label><br/>
        <input type="number" name="num1"/><br/>

        <label>Enter number 2:</label><br/>
        <input type="number" name="num2"/><br/>

        <label>Enter number 3:</label><br/>
        <input type="number" name="num3"/><br/><br/>

        <input type="submit" value="Total"/>

    </form><br/>

</body>
</html>

<?php

    $num1 = $_POST["num1"]; // Caching from super variable ($_POST["num1"]) to local variable ($num1).
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    $total = null;

    echo"num1 = {$num1}<br/>";
    echo"num2 = {$num2}<br/>";
    echo"num3 = {$num3}";

    // Absolute Value
    echo"<br/><br/>== Absolute Value ==<br/><br/>";
    
    $total = abs($num1); // abs() = finding the absolute value.
    echo"abs(\$num1): {$total}<br/>";
    $total = abs($num2);
    echo"abs(\$num2): {$total}<br/>";
    $total = abs($num3);
    echo"abs(\$num3): {$total}";

    // Round Function = rounds up
    echo"<br/><br/>== Round Function ==<br/><br/>";

    $total = round($num1);
    echo"round(\$num1): {$total}<br/>";
    $total = round($num2);
    echo"round(\$num2): {$total}<br/>";
    $total = round($num3);
    echo"round(\$num3): {$total}<br/>";

    // Floor function = rounds down
    echo"<br/><br/>== Floor Function ==<br/><br/>";

    $total = floor($num1);
    echo"floor(\$num1): {$total}<br/>";
    $total = floor($num2);
    echo"floor(\$num2): {$total}<br/>";
    $total = floor($num3);
    echo"floor(\$num3): {$total}<br/>";

    // Ceiling function = ALWAYS rounds up
    echo"<br/><br/>== Ceiling Function ==<br/><br/>";

    $total = ceil($num1);
    echo"ceil(\$num1): {$total}<br/>";
    $total = ceil($num2);
    echo"ceil(\$num2): {$total}<br/>";
    $total = ceil($num3);
    echo"ceil(\$num3): {$total}<br/>";


    // Power function = x to the power of y
    echo"<br/><br/>== Power Function ==<br/><br/>";

    $total = pow($num1, $num2);
    echo"pow(\$num1, \$num2): {$total}<br/>";
    $total = pow($num2, $num3);
    echo"pow(\$num2, \$num3): {$total}<br/>";
    $total = pow($num3, $num1);
    echo"pow(\$num3, \$num1): {$total}<br/>";

    // Square root function
    echo"<br/><br/>== Square Root Function ==<br/><br/>";

    $total = sqrt($num1);
    echo"sqrt(\$num1): {$total}<br/>";
    $total = sqrt($num2);
    echo"sqrt(\$num2): {$total}<br/>";
    $total = sqrt($num3);
    echo"sqrt(\$num3): {$total}<br/>";

    // Max function = whatever values you place here, max f(x) gives you the maximum value.
    echo"<br/><br/>== Max Function ==<br/><br/>";

    $total = max($num1, $num2, $num3);
    echo"max(\$num1, \$num2, \$num3): {$total}<br/>";

    // Min function = gives out the minimum value.
    echo"<br/><br/>== Min Function ==<br/><br/>";

    $total = min($num1, $num2, $num3);
    echo"min(\$num1, \$num2, \$num3): {$total}<br/>";


    // Pi function = used for displaying Pi values.
    echo"<br/><br/>== Pi Function ==<br/><br/>";

    $total = pi();
    echo"pi(): {$total}<br/>";

    // Random function = gives you a random number.
    echo"<br/><br/>== Random Function ==<br/><br/>";

    $total = rand();
    echo"rand(): {$total}<br/>";

               // 1 = min number 
               //    6 = max number;
    $total = rand(1, 6);
    echo"rand(1, 6): {$total}<br/><br/>";

    $total = rand(1, 100);
    echo"rand(1, 100): {$total}<br/>";

    $total = rand(1, 50);
    echo"rand(1, 50): {$total}<br/>";

    $total = rand(51, 100);
    echo"rand(51, 100): {$total}<br/>";
?>