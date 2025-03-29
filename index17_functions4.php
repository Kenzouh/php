<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Functions 4</title>

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

    <form action="index17_functions4.php" method="post">
        
        <label>Num1:</label><br/>
        <input type="number" name="num1"/><br/>

        <label>Num2:</label><br/>
        <input type="number" name="num2"/><br/><br/>

        <input type="submit" name="enter"/><br/>

    </form><br/><br/>

</body>
</html>

<?php

if(isset($_POST["enter"])){
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    function add($num1, $num2){
        $sum = $num1 + $num2;

        return $sum;
    }

    // Short cut version
    function subtract($num1, $num2){
        
        return $num1 - $num2;
    }

    function multiply($num1, $num2){
        return $num1 * $num2;
    }

    function divide($num1, $num2){
        return $num1 / $num2;
    }

    function power($num1, $num2){
        return $num1 ** $num2;
    }

    function quotient($num1, $num2){
        return $num1 % $num2;
    }

    echo "{$num1} + {$num2} = " . add($num1, $num2) . "<br/>";
    echo"{$num1} - {$num2} = " . subtract($num1, $num2) . "<br/>";
    echo"{$num1} * {$num2} = " . multiply($num1, $num2) . "<br/>";
    echo"{$num1} / {$num2} = " . divide($num1, $num2) . "<br/>";
    echo"{$num1} ** {$num2} = " . power($num1, $num2) . "<br/>";
    echo"{$num1} % {$num2} = " . quotient($num1, $num2) . "<br/>";

}
?>