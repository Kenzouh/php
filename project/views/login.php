<?php
    session_start();
    include("../models/database.php");

    //! Input this in URL tab: http://localhost/php/project/controllers/login.php
    //? Input this in URL tab to see and edit databases: http://localhost/phpmyadmin/

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
        $course = filter_input(INPUT_POST, "course", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST["password"];

        if($password){

            if(empty($fname) || empty($lname) || empty($course) || empty($password)){
                    $error_message = "All fields are required!";
               }

            else{
                
                $sql = "SELECT id, fname, lname, course, password FROM students 
                        WHERE fname = ? AND lname = ? AND course = ?";

                //! stmt (object) = STOPS  SQL INJECTION!
                $stmt = mysqli_prepare($conn, $sql);

                // Binds to the SQL statement
                //"sss" = indicates that all 3 values are strings
                mysqli_stmt_bind_param($stmt, "sss", $fname, $lname, $course);

                mysqli_stmt_execute($stmt); // Executes with the values.
                $result = mysqli_stmt_get_result($stmt); // Retrieve the query result.

                // Fetch 1st row if match is found.
                if($row = mysqli_fetch_assoc($result)){

                    // Verify PW w/ hashed PW in DB.
                    if(password_verify($password, $row["password"])){

                        // Store details in session for future access.
                        $_SESSION["fname"] = $row["fname"];
                        $_SESSION["lname"] = $row["lname"];
                        $_SESSION["course"] = $row["course"];

                        //! Runs on successful login.
                        header("Location: ../views/home.php");
                        exit();
                    }

                    else{
                        $error_message = "Incorrect credentials!";
                    }

                }
                
                else{
                    $error_message = "User not found!";
                }
            }
        }

    }

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>Login Page</title>

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

    <h1>Login Page</h1>
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

        <input type="submit" name="login" value="Login"/><br/><br/>

    </form>

                                 <!-- get = directs to sign up page. -->
                                 <!-- if "post", it'll direct to home page. -->
    <form action="signup.php" method="get">
        <input type="submit" value="Sign Up"/>
    </form>

    <?php if(!empty($error_message)) echo "<p style='color: red;'>$error_message</p>"; ?>

</body>
</html> 