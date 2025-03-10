<!DOCTYPE html>
<html lang="en">
<head>

    <title>PHP | While Loop 2</title>

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

    <form action="index10_whileLoop2.php" method="post">

        <input type="submit" name="stop" value="stop"/>

    </form>

</body>
</html>


<?php

    $seconds = 0;
    $running = true;

    while($running){

        // Checks if a button has been clicked or not.
        if(isset($_POST["stop"])){
            $running = false;
        }
        
        else{
            // Add 1 second
            $seconds++;
            echo "{$seconds}<br/>";
        }
    }
?>