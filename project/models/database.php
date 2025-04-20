<?php

    $db_server ="localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "universitydb";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo"Could not connect to the database.";
    }

    // student table: id, first name, last name, course, password, reg_date

    /*
        Creating a Database

        CREATE DATABASE universitydb;
    */

    /*
    CREATE TABLE `universitydb`.`students` 
                 (`id` INT NOT NULL AUTO_INCREMENT , 
                 `fname` VARCHAR(50) NOT NULL , 
                 `lname` VARCHAR(50) NOT NULL , 
                 `course` VARCHAR(255) NOT NULL , 
                 `password` CHAR(255) NOT NULL , 
                 `reg_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
                 PRIMARY KEY (`id`)) 
                 ENGINE = InnoDB;
    */

?>