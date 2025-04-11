<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }

    catch(mysqli_sql_exception){
        echo"Could not connect to the database... :(<br/>";
        echo"Try turning \"MySQL\" on by pressing \"Start\" in PHP My Admin.";   
    }

    if($conn){
        echo"You are connected to the database!<br/><br/>";
    }

?>