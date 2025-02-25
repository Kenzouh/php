<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP | If Statements</title>

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

    <h1>~~ Life Stage Checker ~~</h1>

    <form action="index6_if_statements.php" method="post">

        <label>Enter age:</label><br/>
        <input type="number" name="age"/><br/><br/>

        <input type="submit" value="Submit"/>

    </form><br/>

</body>
</html>


<?php

    // if statement = if some condition is true, do something
    //              = if condition is false, don't do it
    
    $age = $_POST["age"];

    if($age < 0){
        echo "You cannot be negative years old!";
    }

    elseif($age <= 2){
        echo "You're a cute baby! 🥰👶🏻";
    }

    elseif($age <= 4){
        echo "You're a toddler! 👶🏻";
    }

    elseif($age <= 12){
        echo "You're a kid! 👦🏻👧🏻";
    }

    elseif($age <= 19){
        echo "You're a teenager! 👨🏻👩🏻";
    }
    
    elseif($age <= 59){
        echo "You're an adult! 👨🏻‍🦰👩🏻‍🦰";
    }
    
    elseif($age <= 99){
        echo "You're a senior! 👴🏻👵🏻";
    }

    else{
        echo "WOW! YOU LIVED FOR SUCH A LONG TIME! 😱😱😱😱";
    }
    
?>