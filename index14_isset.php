<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP isset()</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing isset() in PHP."/>
    <meta name="keywords" content="PHP, isset()"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    
    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <form action="index14_isset.php" method="post">

        <label>First Name:</label><br/>
        <input type="text" name="fname"/><br/>

        <label>Fave Color:</label><br/>
        <input type="text" name="fave_color"/><br/>

        <input type="submit" name="Submit"/><br/><br/>

    </form>

</body>
</html>

<?php

    // isset() = Returns TRUE if a variable is declared and not null

    $fname = $_POST["fname"];
    $fave_color = $_POST["fave_color"];

    echo "Is first name set? = " . isset($fname) . "<br/>";
    echo "Is fave color set? = " . isset($fave_color) . "<br/><br/>";

    echo"What happens behind the scenes (Associative Array):<br/><br/>";
    foreach($_POST as $key => $value){
        echo"{$key}: {$value} <br/>";
    }


?>