<?php

    echo"=============== Arithmetic Operators ===============<br><br>";
        
    $a = 15;
    $b = 4;
    $c = null;
    
    $c = $a + $b;
    echo"Addition: {$a} + {$b} = {$c}<br>";
    
    $c = $a - $b;
    echo"Subtraction: {$a} - {$b} = {$c}<br>";

    $c = $a * $b;
    echo"Multiplication: {$a} * {$b} = {$c}<br>";

    $c = $a / $b;
    echo"Division: {$a} / {$b} = {$c}<br>";

    $c = $a ** $b;
    echo"To the power of: {$a} ** {$b} = {$a}^{$a} = {$c}<br>";

    $c = $a % $b; // % = Good in determining even and odd numbers.
    echo"Modulus (remainder): {$a} % {$b} = {$c}";

    
    echo"<br><br>=============== Increment/Decrement ===============<br><br>";
    
    $num = 0;

    echo"num = {$num}<br>";
    echo"num++ = ", $num++, "<br>";
    echo"num = {$num}<br>";
    echo"num++ = ", $num++, "<br>";
    echo"++num = ", ++$num, "<br>";
    echo"++num = ", ++$num, "<br><br>";

    echo"--num = ", --$num, "<br>";
    echo"num = {$num}<br>";
    echo"num-- = ", $num--, "<br>";
    echo"--num = ", --$num, "<br>";
    echo"num = ", $num, "<br>";


    echo"<br><br>=============== Operator Precedence ===============<br><br>";

    echo"Operator Precedence (PEMDAS Rule)<br><br>";

    echo"Parentheses: ()<br>";
    echo"Exponents: **<br>";
    echo"Multiplication: *<br>";
    echo"Division: / %<br>";
    echo"Addition: +<br>";
    echo"Subtraction: -<br><br>";

    $total1 = 24 - 33 * (22 + 43) / 2 ** 3;
    //        24 - 33 *     65    / 2 ** 3
    //        24 - 33 *     65    / 8
    //        24 -    2145        / 8
    //        24 - 268.125
    //        -244.125

    echo"24 - 33 * (22 + 43) / 2 ** 3 = {$total1}<br>";

    $total2 = 100 / 2 * 6 + 8;
    //           50   * 6 + 8
    //                300 + 8
    //                    308

    echo"100 / 2 * 6 + 8 = {$total2}<br>";

    $total3 = 4 - 2 + 5 + 4 * 4;
    //        4 - 2 + 5 +  16
    //        4 - 2 +  21
    //            2 +  21
    //                 23 
    echo"4 - 2 + 5 + 4 * 4 = {$total3}";

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Arithmetic Operators</title>

    <meta charset="UTF-8">
    <meta name="description" content="PHP Arithmetic Operators">
    <meta name="keywords" content="PHP, Arithmetic, Operators, HTML">
    <meta name="author" content="Kenzo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--meta http-equiv="refresh" content="60"-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
</body>
</html>