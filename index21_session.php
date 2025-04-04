<?php
    // Index Page
/*
     $_SESSION (super global variable/SGV) = that stores info. on a user to be used on multiple pages.

        User = assigned with a session-id
        Example: Login credentials
*/

// You need to put this before displaying any HTML elements.
    session_start(); 
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Session</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Session in PHP."/>
    <meta name="keywords" content="PHP, Session"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <h1 style="text-align: center;">== Login Page ==</h1>

    <h2 style="text-align: center;">Go to <a href="index21_home.php">HOME PAGE</a></h2>
</body>
</html>

<?php
    $_SESSION["user_id"] = "525";
    $_SESSION["username"] = "Kana";
    $_SESSION["password"] = "kana12345";

    echo "User ID: " . $_SESSION["user_id"] . "<br/>";
    echo "Username: " . $_SESSION["username"] . "<br/>";
    echo "Password: " . $_SESSION["password"] . "<br/>";
?>

