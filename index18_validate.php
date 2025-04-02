<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Validate</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Validate in PHP."/>
    <meta name="keywords" content="PHP, Validate"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <form action="index18_validate.php" method="post">

        <label>Employee ID:</label><br/>
        <input type="text" name="employee_id"/><br/>

        <label>First Name:</label><br/>
        <input type="text" name="fname"/><br/>

        <label>Age:</label><br/>
        <input type="text" name="age"/><br/>

        <label>Email:</label><br/>
        <input type="text" name="email"/><br/><br/>

        <input type="submit" name="login" value="Login"/>

    </form><br/><br/>
    
</body>
</html>

<?php

    if(isset($_POST["login"])){

        // If the input doesn't pass the validation test, it'll output an EMPTY STRING.

        
        $fname = filter_input(INPUT_POST, "fname",
                              FILTER_SANITIZE_SPECIAL_CHARS); // Sadly, no validate for strings.

        $employee_id = filter_input(INPUT_POST, "employee_id",
                                    FILTER_VALIDATE_INT); // If NaN, assign empty string to "employee_id".
        
        $age = filter_input(INPUT_POST, "age",
                            FILTER_VALIDATE_INT); // If NaN, assign empty string to "age".

        $email = filter_input(INPUT_POST, "email",
                              FILTER_VALIDATE_EMAIL); // If you input special characters, return an empty string.

        // ===============================================================================================================
        
        // FILTER_VALIDATE_INT will run this block.
        if(empty($employee_id)){
            echo"ID: Invalid input. Input numbers only.<br/>";
        }
        else{
            echo"Inputted [{$employee_id}] successfully.<br/>";
        }
    
        // FILTER_VALIDATE_INT will run this block.
        if(empty($age)){
            echo"Age: Invalid input. Input numbers only.<br/>";
        }
        else{
            echo"Inputted [{$age}] sucessfully.<br/>";
        }

        // FILTER_VALIDATE_EMAIL will run this block.
        if(empty($email)){
            echo"That email wasn't valid.<br/>";
        }
        else{
            echo"Inputted [{$email}] successfully.<br/>";
        }

        echo"<br/><br/>Employee {$employee_id}: {$fname}<br/>";
        echo"Age: {$age}<br/>";
        echo"Email: {$email}<br/>";
    }

?>