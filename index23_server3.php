<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Server 3</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Server 3 in PHP."/>
    <meta name="keywords" content="PHP, Server"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>
                  <!-- "htmlspecialchars() = stops cross-site scripts"-->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"
        method="post">
        
        <label>User ID:</label><br/>
        <input type="number" min="1" name="user_id"/><br/>

        <label>Username:</label><br/>
        <input type="text" name="username"/><br/>

        <label>Password:</label><br/>
        <input type="password" name="password"/><br/><br/>

        <input type="submit" name="enter" value="Enter"/><br/>

    </form><br/>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $user_id = filter_input(INPUT_POST, "user_id", FILTER_VALIDATE_INT);
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        
        echo"Welcome User #{$user_id}!<br/> Enjoy your stay, {$username}! :)";

    }

?>