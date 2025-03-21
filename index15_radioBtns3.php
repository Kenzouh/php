<!DOCTYPE html>

<html lang="en">
<head>

    <title>PHP | Radio Buttons 3</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Radio Buttons in PHP."/>
    <meta name="keywords" content="PHP, Radio Buttons"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <h3>What time of the day do you wake up?</h3>

    <form action="index15_radioBtns3.php" method="post">

        <input type="radio" id="morning" name="time_of_day" value="Morning"/>
        <label for="morning">Morning</label><br/>

        <input type="radio" id="noon" name="time_of_day" value="Noon"/>
        <label for="noon">Noon</label><br/>

        <input type="radio" id="afternoon" name="time_of_day" value="Afternoon"/>
        <label for="afternoon">Afternoon</label><br/>

        <input type="radio" id="evening" name="time_of_day" value="Evening"/>
        <label for="evening">Evening</label><br/>

        <input type="radio" id="night" name="time_of_day" value="Night"/>
        <label for="night">Night</label><br/><br/>

        <input type="submit" name="confirm" value="Confirm"/><br/>

    </form><br/>
    
</body>
</html>


<?php

    // Switch method

    if(isset($_POST["confirm"])){
        $time_of_day = null;

        if(isset($_POST["time_of_day"])){
            $time_of_day = $_POST["time_of_day"];
        }


        switch($time_of_day){

               // Must be the value of the VALUE ATTRIBUTE not the name attribute! 
            case "Morning":
                echo"You wake up in the <b>{$time_of_day}</b>!<br/>";
                break;

            case "Noon":
                echo"You wake up during <b>{$time_of_day}</b>!<br/>";
                break;

            case "Afternoon":
                echo"You wake up in the <b>{$time_of_day}</b>!<br/>";
                break;

            case "Evening":
                echo"You wake up in the <b>{$time_of_day}</b>!<br/>";
                break;

            case "Night":
                echo"You wake up at <b>{$time_of_day}</b>!<br/>";
                break;

            default:
                echo"Please, choose something. Thank you! :)<br/>";
                break;
        }
    }
?>