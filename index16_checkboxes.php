<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Checkboxes</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Checkboxes in PHP."/>
    <meta name="keywords" content="PHP, Checkboxes, Forms"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <h3>Which zoo animal do you want to feed?</h3>

    <form action="index16_checkboxes.php" method="post">

                                <!-- key          value (capitalized for easy classification in PHP. Not necessarily needed to be capitalized.) -->
        <input type="checkbox" name="bear" value="Bear"/>
        <label>Bear</label><br/>

        <input type="checkbox" name="gorilla" value="Gorilla"/>
        <label>Gorilla</label><br/>

        <input type="checkbox" name="lion" value="Lion"/>
        <label>Lion</label><br/>

        <input type="checkbox" name="shark" value="Shark"/>
        <label>Shark</label><br/>

        <input type="checkbox" name="tiger" value="Tiger"/>
        <label>Tiger</label><br/><br/>

        <input type="submit" name="submit"/>
    </form><br/><br/>

</body>
</html>

<?php

    if(isset($_POST["submit"])){


        // isset() = you want to feed them! :D

                      // Must be the value of the name attribute!
        if(isset($_POST["bear"])){
            echo"<div style='color: green;'>You WANT to feed bears! :D</div>";
        }

        if(isset($_POST["gorilla"])){
            echo"<div style='color: green;'>You WANT to feed gorillas! :D</div>";
        }

        if(isset($_POST["lion"])){
            echo"<div style='color: green;'>You WANT to feed lions! :D</div>";
        }

        if(isset($_POST["shark"])){
            echo"<div style='color: green;'>You WANT to feed sharks! :D</div>";
        }

        if(isset($_POST["tiger"])){
            echo"<div style='color: green;'>You WANT to feed tigers! :D</div>";
        }

        echo"<br/>";

        // =========================================================================

        // empty() = you don't want to feed them... :(

        if(empty($_POST["bear"])){
            echo"<div style='color: red;'>You DON'T WANT to feed bears! :(</div>";
        }

        if(empty($_POST["gorilla"])){
            echo"<div style='color: red;'>You DON'T WANT to feed gorillas! :(</div>";
        }

        if(empty($_POST["lion"])){
            echo"<div style='color: red;'>You DON'T WANT to feed lions! :(</div>";
        }

        if(empty($_POST["shark"])){
            echo"<div style='color: red;'>You DON'T WANT to feed sharks! :(</div>";
        }

        if(empty($_POST["tiger"])){
            echo"<div style='color: red;'>You DON'T WANT to feed tigers! :(</div>";
        }
    }

?>