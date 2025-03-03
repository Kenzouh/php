<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP | Logical Operators</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Utilizing Logical Operators in PHP."/>
    <meta name="keywords" content="PHP, Logical Operators, AND, OR"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    
    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>

</head>
<body>


    <h1>Employee Bonus Checker</h1>
    
    <form action="index7_logical_operators.php" method="post">

        <label>Years working:</label><br/>
        <input type="number" name="years"/><br/><br/>

        <label>Performance Rating:</label><br/>
        <input type="number" name="performance" max="10"/><br/><br/>

        <input type="submit" value="Enter"/>
    </form><br/>

</body>
</html>


<?php

    // Logical operators = combine conditional statements.
    // if(condition1 && condition2)

    // &&           = True if both conditions are true.
    // ||           = True if at least one condition is true.
    //  ! (not)     = True if false. False if true.

    $years = $_POST["years"];
    $performance = $_POST["performance"];

    echo "Years you have been working to this company: <b>{$years}</b>.<br/>";
    echo "Your performance rating: <b>{$performance} stars.</b><br/><br/>";

    if($years >= 5 && $performance >= 8){
        echo "Congrats! You get <b>30% bonus</b>!<br/>";
    }
    
    elseif($years < 0 || $performance < 0){
        echo"You can't have negative years/rating!";
    }

    elseif($years >= 3 || $performance >= 7){
        echo "Congrats! You get <b>15% bonus</b>!<br/>";
    }
    
    else{
        echo "Sorry, you're ineligible of getting a bonus. :(";
    }

/*
    == 3 ==

    IMPLEMENT ! operator

    Driving License:

    >18
    Passed driving test
    No criminal record
    
*/
?>