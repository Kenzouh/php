<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Server</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Server in PHP."/>
    <meta name="keywords" content="PHP, Server"/>
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

    // Index Page

    /*
         $_SERVER (super global variable/SGV) = that contains headers, paths, and script locations.
                                              = Web server creates entries in this array.
                                              = Shows nearly everything you need to know about the current web page environment
    */

    foreach($_SERVER as $key => $value){
        echo"{$key} = {$value} <br/>"; // Contents are for advanced PHP learners.

                // Most interesting keys: PHP_SELF (location of this page) & REQUEST_METHOD (GET/POST/Default: GET)
    }
?>