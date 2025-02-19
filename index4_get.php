<!DOCTYPE html>
<html lang="en">
<head>

    <title>PHP | GET Forms </title>
    
    <meta charset="UTF-8"/>
    <meta name="description" content="GET and POST Forms Requests"/>
    <meta name="keywords" content="PHP, GET, POST, Forms"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>
            <!-- A file where you want to send your form's answers (the data) -->
    <form action="index4_get.php" method="get">

        <label>Order</label><br/>
        <input type="text" name="order" placeholder="Orange"/><br/><br/>

        <label>Quantity:</label><br/>
        <input type="number" name="quantity" min="1" max="99" value="1"/><br/><br/>

        <input type="submit" value="Submit"/>
    </form><br/>

</body>
</html>

<?php
    /* $_GET, $_POST = special variables used to collect data from an HTML form
                       data is sent to the file in the action attribute of <form>
                       <form action="file_name_you_want_to_deliver_the_data.php" method="get">
                     = SUPER GLOBAL VARIABLES!!!!!!!!

       $_GET = data is appended to the URL.
               NOT SECURE = not for passwords.
               char limit
               Bookmark is possible with values
               GET requests can be cached
               Better for a search page
               It's an Array!
    */


    // Special type of a variable. It can hold more than 1 value. 
    // IT'S TECHNICALLY AN ARRAY!
    // "username" & "password" = value of the name attribute of the input element

    // Changing the value of the URL can also manipulate the data.

    // Concatenation to connect GET method with a string.
    echo $_GET["order"] . "<br/>"; // Array

    // Another way of putting a line break.
    echo "{$_GET["quantity"]} <br/><br/>";
    
    echo"You ordered {$_GET["quantity"]}x {$_GET["order"]}! :D";
?>