<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP | Switch Case</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Switch Case in PHP"/>
    <meta name="keywords" content="PHP, Switch, Case"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>
    
    <form action="index8_switch.php" method="post">
        <label>Enter a number (1&ndash;12)</label><br/>
        <input type="text" name="number"/><br/><br/>

        <input type="submit" value="Submit"/><br/><br/>
    </form>

</body>
</html>


<?php

    // Switch = replacement to using many elseif statements.
    //        = more efficient, less code to write.

    $number = $_POST["number"];
    
    echo"Entered number: {$number}<br/><br/>";

    switch($number){

        case 1:
            echo "It's January! 🌨️☃️❄️<br/>";
            break;

        case 2:
            echo "It's February! 🥰💝💗<br/>";
            break;

        case 3:
            echo "It's March! 🪴🌱🌿<br/>";
            break;

        case 4:
            echo "It's April! 🌹🏵️🌺<br/>";
            break;

        case 5:
            echo "It's May! 🌞🌻🌄<br/>";
            break;

        case 6:
            echo "It's June! 🌅😎🏖️<br/>";
            break;

        case 7:
            echo "It's July! 🌊🏄🏻‍♀️🍷<br/>";
            break;

        case 8:
            echo "It's August! 🌅🌤️☀️<br/>";
            break;

        case 9:
            echo "It's September! 🍁🍂🏫<br/>";
            break;

        case 10:
            echo "It's October! 👻🦇🎃<br/>";
            break;

        case 11:
            echo "It's November! 🦃🍁🍂<br/>";
            break;

        case 12:
            echo "It's December! 🏂🏻🎄🎅🏻<br/>";
            break;

        default:
            echo "{$number} is invalid. Input [1&ndash;12] only.<br/>";
    }

               // l = gives you the day of the week.
    $date = date("l");

    echo "Day today: <b>{$date}</b>";
?>