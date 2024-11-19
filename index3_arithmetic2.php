<?php

    // ========================== Arithmetic Operators ==========================

    echo"==================== Arithmetic Operators ====================<br><br>";

    $num1 = 30;
    $num2 = 7;
    $answer = null;

    $answer = $num1 + $num2;
    echo"Sum: {$num1} + {$num2} = ";
    echo $answer; // Another way of typing the variable's value only.

    $answer = $num1 - $num2;
    echo"<br>Difference: {$num1} - {$num2} = {$answer}<br>";
    
    $answer = $num1 * $num2;
    echo"Product: {$num1} * {$num2} = {$answer}<br>";

    $answer = $num1 / $num2;
    echo"Quotient: {$num1} / {$num2} = {$answer}<br><br>";

    $answer = $num1 ** $num2;
    echo"To the power: {$num1} ** {$num2} = {$answer}<br>";

    $answer = $num1 % $num2;
    echo"Remainder: {$num1} % {$num2} = {$answer}<br>";

    // ========================== Incrementation/Decrementation ==========================

    echo"<br>================ Incrementation/Decrementation ================<br><br>";

    $num = 20;

    echo"Original value: {$num}<br><br><br>";
    
    $num = ++$num; // Longer way of incrementing 
    echo"++num = {$num}<br>";
    echo"num++ = ", $num++, "<br>";
    echo"++num = ", ++$num, "<br>";
    echo"++num = ", ++$num, "<br><br>";

    echo"num = ", $num, "<br><br>";

    echo"--num = ", --$num, "<br>";
    echo"--num = ", --$num, "<br>";
    echo"num-- = ", $num--, "<br>";
    echo"num = ", $num, "<br>";
    echo"num-- = ", $num--, "<br><br>";

    echo"num = ", $num, "<br>";
?>