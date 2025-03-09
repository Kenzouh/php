<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>PHP | While Loop</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing While Loop in PHP."/>
    <meta name="keywords" content="PHP, While, Loop, While Loop"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

</body>
</html>

<?php

    // while loop = run code INFINITELY while some condition remains true.

    // for loop = iterate LIMITED AMOUNT OF TIMES.

    // 1 statement only unlike for loop having 3.

    $number = 0;

    // This process is better done in FOR LOOP.
    while($number < 10){
        $number++;
        echo $number . "<br/>";
    }

?>