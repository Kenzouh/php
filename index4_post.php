<!DOCTYPE html>
<html lang="en">
<head>

    <title>PHP | POST Forms</title>
    
    <meta charset="UTF-8"/>
    <meta name="description" content="GET and POST Forms Requests"/>
    <meta name="keywords" content="PHP, GET, POST, Forms"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="/img/favicon.jpg"/>
</head>
<body>
    <form action="index4_post.php" method="post">

        <label>First Name:</label><br/>
        <input type="text" name="fname"/><br/><br/>

        <label>Last Name:</label><br/>
        <input type="text" name="lname"/><br/><br/>

        <label>Email:</label><br/>
        <input type="email" name="email"/><br/><br/>

        <label>Birthdate:</label><br/>
        <input type="date" name="birthdate"/><br/><br/>

        <label>Password:</label><br/>
        <input type="password" name="password"/><br/><br/>

        <input type="submit" value="Submit"/>

    </form><br/><br/>
</body>


<?php
    /* 
       $_POST = Data is packaged inside the body of the HTTP request
                MORE SECURE
                No data limit
                Cannot bookmark
                GET requests are not cached
                Better for submitting credentials (USERNAME & PASSWORD)
    */

    //! The values taken from $_POST are NOT appended to the URL!
            // Value of the name attribute
    echo"First Name: {$_POST["fname"]}<br/>";
    echo"Last Name: {$_POST["lname"]}<br/>";
    echo"Email: {$_POST["email"]}<br/>";
    echo"Birthdate: {$_POST["birthdate"]}<br/>";
    echo"Password: {$_POST["password"]}<br/>";
?>