<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP empty()</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing empty() in PHP."/>
    <meta name="keywords" content="PHP, empty()"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    
    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <form action="index14_empty.php" method="post">
        
        <label>First Name:</label><br/>
        <input type="text" name="fname"/><br/>

        <label>Fave Color:</label><br/>
        <input type="text" name="fave_color"/><br/>

        <input type="reset" name="reset"/>
        <input type="submit" name="submit"/>
    </form>
</body>


<?php

    // empty() = Returns TRUE if a variable is NOT DECLARED, FALSE, NULL, ""

    $fname = $_POST["fname"];
    $fave_color = $_POST["fave_color"];

    $resetBtn = $_POST["reset"];
    $submitBtn = $_POST["submit"];

    echo"Is First Name empty? (takes user response): " . empty($fname) . "<br/>";
    echo"Is Fave Color empty? (takes user response): " . empty($fave_color) . "<br/>";

    echo"Is reset button empty? (doesn't have a VALUE attribute): " . empty($resetBtn) . "<br/>";
    echo"Is submit button empty? (has a VALUE attribute): " . empty($submitBtn) . "<br/>";
      
?>