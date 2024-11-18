<?php

    // ====================== String ======================

    $storeName = "Frosty's Ice Cream Store"; 
    $customer_nickname = "Rocky";
    $order = "Chocolate Frosty's (2L)";

    echo"Welcome to {$storeName}, Mr. {$customer_nickname}!<br><br>";
    
    // ====================== Integer ======================

    $quantity = 8;

    echo"You ordered {$quantity}x {$order}!<br><br>";

    // ====================== Float ======================

    $price = 8.50;

    echo"1x {$order} = \${$price}<br><br><br>";

    // ====================== Booleans ======================

    $paying = true;
    $loyalCustomer = true;
    $premiumMember = false;

    echo"// If false, it's '0' | If true, it's '1'<br><br>";

    echo"Paying Status: {$paying}<br>";
    echo"Loyal Customer: {$loyalCustomer}<br>";
    echo"Premium Member: {$premiumMember}<br>";

    // ====================== Summary ======================

    echo"<br><hr><br>";

    $total = null;
    
    echo"Mr. {$customer_nickname} bought {$quantity}x {$order}.<br><br>";

    $total = $price * $quantity;

    echo"Total = \${$price} x {$quantity} {$order} = \${$total}<br><br>";

    echo"Mr. {$customer_nickname} bought {$quantity}x {$order} which costs \${$total}!<br>";
    echo"Thank you so much! Please come back again at {$storeName}! :D";

?>