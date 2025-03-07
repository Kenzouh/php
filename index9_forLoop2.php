<!DOCTYPE html>

<html lang="en">
<head>

    <title>PHP | For Loop 2</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing For Loop in PHP."/>
    <meta name="keywords" content="PHP, For Loop 2, Loop"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>
    
    <h1 style="text-align: center;">Incrementing based on your input!</h1>

    <form action="index9_forLoop2.php" method="post">

        <label>Input any number:</label><br/>
        <input type="number" name="num" min="1" max="200"/><br/><br/>

        <input type="submit" value="Submit"/>

    </form><br/>

</body>
</html>


<?php

    $num = $_POST["num"];

    for($i = 1; $i <= $num; $i++){
        echo"{$i} ";
    }
    
?>