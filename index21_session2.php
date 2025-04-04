<?php

    session_start();

    // Make sure this part occurs before the HTML part.

    if(isset($_POST["login"])){

        if(!empty($_POST["user_id"]) && !empty($_POST["username"]) && 
           !empty($_POST["password"])){
            
                                    // Good practice to filter it.
            $_SESSION["user_id"] = filter_input(INPUT_POST, "user_id", FILTER_VALIDATE_INT);
            $_SESSION["username"] = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $_SESSION["password"] = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

            // Directs your login page to the home page.
            header("Location: index21_home2.php");
        }

        else{
            echo"<script>
                alert('Missing User ID/Username/Password. :(');
            </script>";
        }
    }

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Session 2</title>

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

    <form action="index21_session2.php" method="post">
        
        <label>User ID:</label><br/>
        <input type="number" name="user_id"/><br/>

        <label>Username:</label><br/>
        <input type="text" name="username"/><br/>

        <label>Password:</label><br/>
        <input type="password" name="password"/><br/>

        <input type="submit" name="login" value="Login"/>

    </form>
    
</body>
</html>