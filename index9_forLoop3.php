<!DOCTYPE html>

<html lang="en">
<head>

    <title>PHP | For Loop 3</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing For Loop in PHP."/>
    <meta name="keywords" content="PHP, For Loop 3, Loop"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <h1 style="text-align: center;">Decrementing based on your input!</h1>

    <form action="index9_forLoop3.php" method="post">

        <label>Input number (less than 50):</label><br/>
        <input type="number" name="num"/><br/><br/>

        <input type="submit" min="1" max="49" value="Submit"/>
    
    </form><br/>
</body>
</html>

<?php

    $num = $_POST["num"];

    for($i = 50; $i >= $num; $i--){
        echo "{$i} ";
    }
?>