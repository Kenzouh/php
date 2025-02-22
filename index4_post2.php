<!DOCTYPE html>
<html lang="en">
<head>

    <title>PHP | POST Forms 2</title>
    
    <meta charset="UTF-8"/>
    <meta name="description" content="GET and POST Forms Requests"/>
    <meta name="keywords" content="PHP, GET, POST, Forms"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>
    <form action="index4_post2.php" method="post">

    <label>Order Quantity:</label><br/>
    <input type="number" name="quantity" min="1" max="99" value="1"/><br/><br/>

    <input type="submit" value="Submit"/>

    </form><br/><br/>
</body>


<?php
    $item = "Cola";
    $price = 2.99;

    // $quantity = local variable to store the value of POST super variable.
    $quantity = $_POST["quantity"]; // Caching.
    $total = null;

    $total = $quantity * $price;

    echo"You have ordered {$quantity}x {$item}(s)!<br/>";
    echo"Your total payment is: \${$total}!<br/><br/>";

    echo"Thank you! Please, come again! :D";
?>