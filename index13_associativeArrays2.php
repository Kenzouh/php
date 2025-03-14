<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Associative Arrays 2</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Associative Arrays in PHP 2"/>
    <meta name="keywords" content="PHP, Associative Array, Array"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <p>Enter any of these values (must be the same values):</p>

    <p>"Red", "Orange", "Yellow", "Green", "Pink", "Violet", "Purple", "Blue"</p>
    <form action="index13_associativeArrays2.php" method="post">

        <label>Enter a color:</label><br/>
        <input type="text" name="color"/><br/>

        <input type="submit" value="Submit"/><br/>
    </form><br/><br/>

</body>
</html>

<?php

    $color = $_POST["color"];

    $fruits = array(
                      "Red" => "Apple",
                      "Orange" => "Orange",
                      "Yellow" => "Cantaloupe",
                      "Green" => "Watermelon",
                      "Pink" => "Peach",
                      "Violet" => "Grapes",
                      "Purple" => "Passionfruit",
                      "Blue" => "Blueberry"
                   );

    $fruit = $fruits[$_POST["color"]];

    echo"<b>{$color}</b> fruit: <b>{$fruit}</b>";
?>