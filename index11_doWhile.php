<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP | Do While</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Do While Loop in PHP."/>
    <meta name="keywords" content="PHP, Do, While, Do While, Loop"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="refresh" content="60"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>
</body>
</html>

<?php

    echo"====================================<br/><br/>";

    $num1 = 1;

    while($num1 < 5){
        echo "Hi there!<br/>";
        $num1++;
    }
    
    echo"<br/><br/>====================================<br/><br/>";

    $num2 = 8;

    // Prints out ONCE even if the condition is FALSE.
    do{ // Echoes this once, then checks the statement inside the while loop.
        echo"Hi there!<br/>";
        $num2++;
    }

    while($num2 < 5); // Not gonna write anything in the screen unless this condition is TRUE.

    echo"<br/><br/>====================================<br/><br/>";

    $num3 = 3;

    do{
        echo"Hi there!<br/>";
        $num3++;
    }

    while($num3 < 5);
?>