<?php
    session_start();
    include("../models/database.php");

    if(!isset($_SESSION["fname"])){

                // Get the last registered user.
        $sql = "SELECT fname, lname FROM students ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if($result && mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);

            $_SESSION["fname"] = $row["fname"];
            $_SESSION["lname"] = $row["lname"];
        }

        else{
            $_SESSION["fname"] = "Guest"; // If no user found.
            $_SESSION["lname"] = "";
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_destroy();
        header("Location: ../controllers/signup.php");
    }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>Home</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Home Page."/>
    <meta name="keywords" content="PHP, Home"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>

    <h1>Home</h1>

     <?php 
        echo"<h2>Welcome, " .  $_SESSION["fname"] . " " . $_SESSION["lname"]. "!</h2>";
    ?>

                <!-- stops cross-site scripts -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"
        method="post">

        <input type="submit" name="logout" value="Log out"/><br/><br/>

    </form>

</body>
</html>