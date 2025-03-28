<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Functions 3</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Functions in PHP."/>
    <meta name="keywords" content="PHP, Functions"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>
   
    <form action="index17_functions3.php" method="post">
        <label>Employee First Name:</label><br/>
        <input type="text" name="emp_fname"/><br/>
        
        <label>Employee Last Name:</label><br/>
        <input type="text" name="emp_lname"/><br/>

        <label>Rating (1&ndash;5 stars):</label><br/>
        <input type="number" name="rating" min="0" max="5"/><br/>

        <label>Salary:</label><br/>
        <input type="number" name="salary" min="0" max="100000"/><br/><br/>

        <input type="submit" name="enter" value="Enter"/><br/>

    </form><br/>

</body>
</html>

<?php

if(isset($_POST["enter"])){

    $emp_fname = $_POST["emp_fname"];
    $emp_lname = $_POST["emp_lname"];
    $rating = $_POST["rating"];
    $salary = $_POST["salary"];

                        // Parameter can be 1 or more.
    function employee_id($emp_fname, $emp_lname, $rating, $salary){
        echo"Employee First Name: {$emp_fname}<br/>";
        echo"Employee Last Name: {$emp_lname}<br/>";
        echo"Rating: {$rating} star(s)<br/>";
        echo"Salary: {$salary}<br/><br/>";
    }

    employee_id($emp_fname, $emp_lname, $rating, $salary);
}
?>