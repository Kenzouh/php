<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Password Hashing</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Hashing in PHP."/>
    <meta name="keywords" content="PHP, Password Hashing, Password, Hashing"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"
        method="post">

        <label>Username:</label><br/>
        <input type="text" name="username" required/><br/>

        <label>Password:</label><br/>
        <input type="password" name="password" required/><br/>

        <label>Confirm Password:</label><br/>
        <input type="password" name="confirm_password" required/><br/>

        <input type="submit" name="login" value="Login" required/><br/>

    </form><br/>

</body>
</html>

<?php

    // If logged in, do...
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // No need to sanitize passwords. Alternative: just trim() them.

        /*
            hashing = transforming sensitive data (e.g.: password) to gibberish letters, nos., symbols.
                    = undergoes a mathematical process (similar to encryption)
                    = helps hide your sensitive info. from 3rd party companies.
        */

        // Password must match confirm password input, then hash inside this block.
        if($password === $confirm_password){


            // 2 arguments: password, hashing algorithm (constant that specifies the algo.)
                                         // uses bcrypt algo. (default in PHP 5.5.0)
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $confirm_hash = password_hash($confirm_password, PASSWORD_DEFAULT);
                           
            echo "<b>Password Hash Value:</b> {$hash}<br/>";
            echo"<b>Confirm Password Hash Value:</b> {$confirm_hash}<br/><br/>";
    
            echo"You confirmed your password.<br/>";
            echo"You are now logged in, {$username}!<br/>";
        }
        else{
            echo"Incorrect password.<br/>";
            echo"Access Denied.<br/>";
        }
    }
?>