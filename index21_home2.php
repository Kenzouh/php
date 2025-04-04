<?php

    session_start();

    // Make sure this is before the echo functions. Put the echoes in a different PHP tag (see lines 32–36).
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: index21_session2.php");
    }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Session</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Session in PHP."/>
    <meta name="keywords" content="PHP, Session, Home"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <h1 style="text-align: center;">== Home Page ==</h1>

    <?php

        echo "User #" . $_SESSION["user_id"] . ": " . $_SESSION["username"] . 
        " successfully logged in!";
    ?>

    <form action="index21_session2.php" method="post">
        <input type="submit" name="logout" value="Log Out"/>
    </form>

</body>
</html>