<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP | Logical Operators 2</title>

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

    <h1>Theme Park Ride Forms</h1>

    <form action="index7_logical_operators2.php" method="post">

        <label>Age:</label><br/>
        <input type="number" name="age"/><br/><br/>

        <label>Height (cm):</label><br/>
        <input type="number" name="height"/><br/><br/>

        <label>Have health problems ("Y" if yes, "N" if no)?:</label><br/>
        <input type="text" name="health"/><br/><br/>

        <input type="submit" value="Submit"/>

    </form><br/>

</body>
</html>


<?php

/*
    == 2 ==

    Theme Park Rides:

    — 12 years old or older
    — >= 150cm height
    — 
*/

    $age = $_POST["age"];
    $height = $_POST["height"];
    $health = $_POST["health"];
    

    if($age === null || $height === null || $health === null){
        echo"⚠️ Please enter all the required requirements!";
    }

    elseif($age <= 0 || $age >= 60){
        echo"❌ Sorry, your age is not allowed to ride.<br/>
                You have to be 12&ndash;59 to ride.";
    }

    elseif($age >= 12 && $age < 60){

        if($height >= 150){

            if($health == "N" || $health == "n"){
                echo "✅ Welcome aboard!!";
            }
            
            else{
                echo"❌ Sorry, you should be healthy to ride. :(<br/>";
            }
        }

        else{
            echo"❌ Sorry, your height should be 150cm to ride. :(<br/>";
        }

    }

    elseif($health != "N" || $health != "n"){
        echo"❌ Sorry, you should be healthy to ride. :(<br/>";
    }

    else{
        echo"<br/>== Reminders ==<br/><br/>";

        echo"You should be 12&ndash;59 years old to ride.<br/>";
        echo"You should be 150cm or taller to ride.<br/>";
        echo"You should be healthy to ride.<br/>";
    }
?>