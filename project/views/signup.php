<?php 
    session_start();
    include("../models/database.php");

    //! Input this in URL tab: http://localhost/php/project/controllers/signup.php
    //? Input this in URL tab to see and edit databases: http://localhost/phpmyadmin/

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
        $course = filter_input(INPUT_POST, "course", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
    
        if($password === $confirm_password){
    
            $hash = password_hash($password, PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO students (fname, lname, course, password)
                    VALUES('$fname', '$lname', '$course', '$hash')";

            try{
                     // Not an error. "$conn" is just in database.php
                mysqli_query($conn, $sql);
                $_SESSION["fname"] = $fname; // For Home Page
                $_SESSION["lname"] = $lname; // For Home Page
            }

            catch(mysqli_sql_exception){
                $sql_error = "Could not register user.<br/>";
            }

            header("Location: ../views/home.php");
            exit(); // Stops script execution.
        }
    
        else{
            $error_message = "Incorrect password :(<br/>";
        }
    }
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Sign Up</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Sign Up Page."/>
    <meta name="keywords" content="PHP, Sign Up"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="../img/favicon.jpg"/>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>

    <h1>Sign Up</h1>
                <!-- stops cross-site scripts -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"
        method="post">

        <label class="required">First Name:</label><br/>
        <input type="text" name="fname" placeholder="Johnny" required/><br/><br/>

        <label class="required">Last Name:</label><br/>
        <input type="text" name="lname" placeholder="Smithson" required/><br/><br/>

        <label class="required">Course:</label><br/>
        <input type="text" name="course" size="50" placeholder="Bachelor of Science in Information Technology" required/><br/><br/>

        <label class="required">Password:</label><br/>
        <input type="password" name="password" placeholder="****" required/><br/><br/>

        <label class="required">Confirm Password:</label><br/>
        <input type="password" name="confirm_password" placeholder="****" required/><br/><br/>

        <input type="submit" name="signup" value="Sign Up"/><br/><br/>

    </form>
                                <!-- get = directs to login page. -->
    <form action="login.php" method="get">
        <input type="submit" value="Login"/>
    </form>

    <?php if(!empty($error_message)) echo "<p style='color: red;'>$error_message</p>"; ?>
    <?php if(!empty($sql_error)) echo "<p style='color: red;'>$sql_error</p>"; ?>
</body>
</html>