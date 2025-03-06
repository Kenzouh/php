<!DOCTYPE html>

<html lang="en">
<head>

    <title>PHP | For Loop</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing For Loop in PHP."/>
    <meta name="keywords" content="PHP, For Loop, Loop"/>
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

    // for loop = repeat some code a certain amount of times.

    echo"<h1 style='color: green; text-align: center;'>===== Incrementation =====</h1>";

    echo"========== for(\$i=0; \$i > 10; \$i++) ==========<br/><br/>";

    // 1st statement = counter
             // 2nd statement = stopping condition
                      // 3rd statement = increment/decrement
    for($i = 0; $i < 10; $i++){
        echo"{$i}<br/>";
    }

    echo"<br/><br/>========== for(\$i=1; \$i > 11; \$i++) ==========<br/><br/>";

    for($i = 1; $i < 11; $i++){
        echo"{$i}<br/>";
    }

    echo"<br/><br/>========== for(\$i=1; \$i > 6; \$i++) ==========<br/><br/>";

    for($i = 1; $i < 6; $i++){
        echo"{$i}<br/>";
    }

    echo"<br/><br/>========== for(\$i=5; \$i > 11; \$i++) ==========<br/><br/>";

    for($i = 5; $i < 11; $i++){
        echo"{$i}<br/>";
    }



    echo"<h1 style='color: red  ; text-align: center;'>===== Decrementation =====</h1>";

    echo"<br/><br/>========== for(\$i = 10; \$i > -1; \$i--) ==========<br/><br/>";
    
    for($i = 10; $i > -1; $i--){
        echo "{$i}<br/>";
    }

    echo"<br/><br/>========== for(\$i = 10; \$i > 0; \$i--) ==========<br/><br/>";
    
    for($i = 10; $i > 0; $i--){
        echo "{$i}<br/>";
    }

    echo"<br/><br/>========== for(\$i = 10; \$i > 1; \$i--) ==========<br/><br/>";

    for($i = 10; $i > 1; $i--){
        echo"{$i}<br/>";
    }

    echo"<br/><br/>========== for(\$i = 10; \$i > 4; \$i--) ==========<br/><br/>";

    for($i = 10; $i > 4; $i--){
        echo"{$i}<br/>";
    }

    echo"<br/><br/>========== for(\$i = 5; \$i > 0; \$i--) ==========<br/><br/>";

    for($i = 5; $i > 0; $i--){
        echo"{$i}<br/>";
    }

    echo"<br/><br/>========== for(\$i = 5; \$i > -1; \$i--) ==========<br/><br/>";

    for($i = 5; $i > -1; $i--){
        echo"{$i}<br/>";
    }

?>