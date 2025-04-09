<?php

    //? File directory:         C:/xampp/htdocs/php/index25_database.php
    //! Input this in URL tab: http://localhost/php/index25_database.php
    //* Input this in URL tab to see and edit databases: http://localhost/phpmyadmin/

    /* Ways to connect MySQL database:
        1. MySQLi Extension 
        2. PDO (PHP Data Objects)
            Other devs prefer PDO because it can connect more than just MySQL Database.
            Around 12+ more database
            MySQL, PostgreSQL, SQLite, Oracle, SQL Server, etc.
            You must know OOP for this one.

       PHPMyAdmin Link: http://localhost/phpmyadmin/
    */


    // Anything related to connecting the database, name it "database.php".

    $db_server = "localhost"; // Holds the name of the server.
    $db_user = "root"; // You can see this in PHP My Admin "User accounts" page.
    $db_pass = ""; // Password
    $db_name = "businessdb";
    $conn = ""; // Connection

    try{
        // Obj       4 args: DB server name, DB username, DB password, DB name
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }

    catch(mysqli_sql_exception){
        echo"Could not connect to the database... :(<br/>";
        echo"Try turning \"MySQL\" on by pressing \"Start\" in PHP My Admin.";
    }
    
    // If a connection exists...
    if($conn){
        // Unnecessary to tell the user. This is just here for testing purposes.
        echo"You are connected to the database!<br/><br/>";
    }
?>