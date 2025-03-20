<!DOCTYPE html>

<html lang="en">
<head>

    <title>PHP | Radio Buttons 2</title>

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

    <h3>Which animal do you find the cutest:</h3>

    <form action="index15_radioBtns2.php" method="post">

        <input type="radio" id="bear" name="animal" value="Bear"/>
        <label for="bear">Bear</label><br/>

        <input type="radio" id="cat" name="animal" value="Cat"/>
        <label for="cat">Cat</label><br/>

        <input type="radio" id="dog" name="animal" value="Dog"/>
        <label for="dog">Dog</label><br/>

        <input type="radio" id="dumbo_octopus" name="animal" value="Dumbo Octopus"/>
        <label for="dumbo_octopus">Dumbo Octopus</label><br/>

        <input type="radio" id="elephant" name="animal" value="Elephant"/>
        <label for="elephant">Elephant</label><br/>

        <input type="radio" id="hippopotamus" name="animal" value="Hippopotamus"/>
        <label for="hippopotamus">Hippopotamus</label><br/><br/>

        <input type="submit" name="confirm" value="Confirm"/><br/>

    </form><br/>    

</body>
</html>

<?php

    // Nested If Method

    if(isset($_POST["confirm"])){

        $animal = null; // If undeclared, the program panics and shows an error message if no user input.

        if(isset($_POST["animal"])){
            $animal = $_POST["animal"];
        }

                   // MUST BE THEIR VALUE ATTRIBUTE! NOT THEIR name attribute!
        if($animal == "Bear"){
            echo"Bear is the cutest! :D<br/><br/>";
        }

        if($animal == "Cat"){
            echo"Cat is the cutest! :D<br/><br/>";
        }

        if($animal == "Dog"){
            echo"Dog is the cutest! :D<br/><br/>";
        }

        if($animal == "Dumbo Octopus"){
            echo"Dumbo Octopus is the cutest! :D<br/><br/>";
        }

        if($animal == "Elephant"){
            echo"Elephant is the cutest! :D<br/><br/>";
        }

        if($animal == "Hippopotamus"){
            echo"Hippopotamus is the cutest! :D<br/<br/>";
        }
    }

?>