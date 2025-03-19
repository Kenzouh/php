<!DOCTYPE html>

<html lang="en">
<head>

    <title>PHP | Radio Buttons</title>

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

    <h3>Pick your favorite color in the rainbow:</h3>

    <form action="index15_radioBtns.php" method="post">

        <!--name="color" makes sure that the elements with the 
            same name will not be checked if one radio button 
            has been checked -->

        <input type="radio" id="red" name="color" value="Red"/>
        <label for="red">Red</label><br/> <!-- for attribute (must be the same name as the id) = once the text has been clicked, it checks the radio button. -->

        <input type="radio" id="orange" name="color" value="Orange"/>
        <label for="orange">Orange</label><br/>

        <input type="radio" id="yellow" name="color" value="Yellow"/>
        <label for="yellow">Yellow</label><br/>

        <input type="radio" id="green" name="color" value="Green"/>
        <label for="green">Green</label><br/>

        <input type="radio" id="blue" name="color" value="Blue"/>
        <label for="blue">Blue</label><br/>

        <input type="radio" id="indigo" name="color" value="Indigo"/>
        <label for="indigo">Indigo</label><br/>
 
        <input type="radio" id="violet" name="color" value="Violet"/>
        <label for="violet">Violet</label><br/><br/>

        <input type="submit" name="confirm" value="confirm"/>

    </form><br/>

</body>
</html>

<?php

    // If method

                   // Submit Button
    if(isset($_POST["confirm"])){

        if(isset($_POST["color"])){
            
            $color =  $_POST["color"];
            echo"Your favorite color in the rainbow is: <b style='color: $color;'>{$color}</b>!<br/><br/>";

            echo "<b style='color: $color;'>{$color}</b>";
        }

        else{
            echo"Please, choose something.";
        }

    }

?>