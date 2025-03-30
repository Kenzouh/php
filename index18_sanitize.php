<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Sanitize</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Sanitize in PHP."/>
    <meta name="keywords" content="PHP, Sanitize"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <form action="index18_sanitize.php" method="post">

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

    /*
     Sanitize = Removes special characters, avoids hacking,
                system breaches, JS code insertion, and 
                SQL injection

              = Strips certain characters of user input, but 
                if your input doesn't pass the validation, validate()
                will output an empty string.

              = If you don't sanitize your user-input, somebody can enter 
                malicious code like a cross-site script or SQL injection.
                Try inputting "<script> alert("You got hacked!");</script>" 
                without sanitizations.

    Validate = outputs an empty string if the input doesn't pass the validation test.
    */


    
    // If login button is interacted with...
    if(isset($_POST["login"])){

            // 3 arguments: what to be inputted,   input name, type of filter 
        $employee_id = filter_input(INPUT_POST, "employee_id", FILTER_SANITIZE_NUMBER_INT);

        // FILTER_SANITIZE_SPECIAL_CHARS: prevents XSS attacks,. Filters special chars like < > & ' "
        // Try right-clicking the page, then "View page source" and check the script.
        $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);

        // Filters all chars besides numbers.
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        
        // Filters all illegal chars.
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);   
        
        echo"Employee No. {$employee_id} successfully logged in!<br/><br/>";
        echo"Welcome to Cool Company, {$fname}!<br/>";
        echo"You are {$age} years old.<br/><br/>";
        echo"Your email is: {$email}";

    }

    echo"<p style='color: red;'>================================</p>";
    echo"<p style='color: red;'>Try \"too23thbru22sh??!!\" in employee id field.</p>";
    echo"<p style='color: red;'>Try \"Johnson{&lt24&gt}\" in first name.</p>";

    echo"<p style='color: purple;'>Special chars in fname won't get removed, but will be treated as string.
                                   <br/>Useful for turning scripts to string (helps avoid SQL injection and system hacks),
                                   <br/>and not an executable one.</p>";

    echo"<p style='color: blue;'>Right click -&gt View page source -&gt Check your inputted value and observe the symbols.";

    echo"<p style='color: red;'>Try \"\$&ltKanga1roo5*&\&gt\" in age.</p>";
    echo"<p style='color: red;'>Try \"kangaroo&lt88&gt@gmail.com>\"</p>";
    echo"<p style='color: red;'>================================</p><br/>";
?>