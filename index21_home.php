<?php

    // Helps in accessing the username and password in a different page (from index to home page).
    session_start();
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

    <h2 style="text-align: center;">Go to <a href="index21_session.php">LOGIN PAGE</a></h2>
</body>
</html>

<?php

echo "User ID: " . $_SESSION["user_id"] . "<br/>";
echo "Username: " . $_SESSION["username"] . "<br/>";
echo "Password: " . $_SESSION["password"] . "<br/>";

?>