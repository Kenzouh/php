<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP | If Statements 2</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing If-Statement in PHP"/>
    <meta name="keywords" content="PHP, If, Else, If Else, If Else Statement"/>
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

    $adult = true;
    $kid = false;
    $male = true;


    echo"adult: true<br/>";
    echo"kid: false<br/>";
    echo"male: true<br/><br/><br/>";


           // == is a comparison operator where it checks if the 2 values are equal.
    if($adult == true){
        echo"You're an adult!<br/>";
    }
    else{
        echo"You're not an adult.<br/>";
    }

    // Default value is "TRUE" inside the if function.
    if($kid){
        echo"You're a kid!<br/>";
    }
    else{
        echo"You're not a kid!<br/>";
    }
    

    if($male){
        echo"You're a male!<br/>";
    }
    else{
        echo"You're a female!<br/>";
    }
?>