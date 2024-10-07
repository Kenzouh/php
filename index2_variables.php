<?php
    // Variable = data (String, Integer, Float, Boolean) placeholder/container.

    
    // ============================================ Strings ============================================


    echo"==================== Strings ====================<br><br>";

            // Can include a space.
    $name = "Anna Smith";
    $username = "Anna123";
    $faveFood = "Omurice";
    

    echo"Good day, {$name}!<br>";  // String literal = echoing a message directly.
    echo"AKA \"{$username}\".<br>";
    echo"Your favorite food is {$faveFood}!";
    
    
    // ============================================ Integer ============================================


    echo"<br><br>==================== Integer ====================<br><br>";
    
    $orderAmount = 5;
    $calories = 654;

    echo"You ordered {$orderAmount}x {$faveFood}!<br>";
    echo"Calories intake per order: {$calories} calories";

    // ============================================ Float ============================================

    $price = 2.81; // USD 

    echo"<br><br>==================== Float ====================<br><br>";

    echo"Each order costs {$price}";


    // ============================================ Boolean ============================================


    echo"<br><br>==================== Boolean ====================<br><br>";

    // Booleans are used with if-statements and loops.
    $hungry = true;
    $fat = false;
    $payingByCash = true;

    echo"Hungry (true): {$hungry}<br>";
    echo"Fat (false): {$fat}<br>";
    echo"Paying By Cash (true): {$payingByCash}";

    // ============================================ Mixing them up ============================================

    echo"<br><br>================= Mixing Them Up =================<br><br>";

    echo"Ms. {$name} ordered {$orderAmount} {$faveFood}!<br><br>";

    // $totalPrice = null; # null = no value
    $totalPrice = $orderAmount * $price;

    echo"Total Price = {$orderAmount} * \${$price} = \${$totalPrice}<br><br>";

    echo"Ms. {$name} paid \${$totalPrice} for {$orderAmount} {$faveFood}!<br>";
    echo"Have a nice day! :)";
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Variables</title>

    <meta charset="UTF-8">
    <meta name="description" content="PHP Variables">
    <meta name="keywords" content="PHP, Variables, HTML">
    <meta name="author" content="Kenzo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--meta http-equiv="refresh" content="60"-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
</body>
</html>