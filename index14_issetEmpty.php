<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP isset() 2</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing isset() and empty() in PHP."/>
    <meta name="keywords" content="PHP, isset(), empty()"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    
    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <form action="index14_issetEmpty.php" method="post" >

        <label>Input ID:</label><br/>
        <input type="number" name="id"/><br/>

        <label>Username:</label><br/>
        <input type="text" name="username"/><br/>

        <label>Password:</label><br/>
        <input type="password" name="password"/><br/>

        <input type="reset" name="reset"/>
        <input type="submit" name="login" value="Login"/>
    </form><br/><br/>

</body>

<?php

    if(isset($_POST["login"])){

        $id = $_POST["id"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($id)){
            echo"ID is missing.";
        }

        elseif(empty($username)){
            echo"Username is missing.";
        }

        elseif(empty($password)){
            echo"Password is missing.";
        }

        else{
            echo"Welcome back, {$username}! :D";
        }
    }
    
?>