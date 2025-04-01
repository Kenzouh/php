<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Sanitize 2</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Sanitize 2 in PHP."/>
    <meta name="keywords" content="PHP, Sanitize"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <form action="index18_sanitize2.php" method="post">

        <label>Toy ID:</label><br/>
        <input type="text" name="toy_id"/><br/>

        <label>Toy Name:</label><br/>
        <input type="text" name="toy_name"/><br/>

        <label>Made In (Country):</label><br/>
        <input type="text" name="country"/><br/>

        <label>Quantity:</label><br/>
        <input type="text" name="quantity"/><br/><br/>

        <input type="submit" name="login" value="Login"/>

    </form><br/><br/>

</body>
</html>

<?php

    if(isset($_POST["login"])){
        
        $toy_id = filter_input(INPUT_POST, "toy_id", FILTER_SANITIZE_NUMBER_INT);

        $toy_name = filter_input(INPUT_POST, "toy_name", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $country = filter_input(INPUT_POST, "country", FILTER_SANITIZE_SPECIAL_CHARS);

        $quantity = filter_input(INPUT_POST, "quantity", FILTER_SANITIZE_NUMBER_INT);


        echo"Customer bought {$quantity} {$toy_name}(s) [ID: {$toy_id}].<br/>";
        echo"{$toy_name} country of origin: {$country}.<br/>";
    }


?>