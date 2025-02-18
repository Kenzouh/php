<?php
    // Variables = String, Integer, Float, Boolean.

    // ======================== String ========================


    $restaurant = "Happy Restaurant";
    $name = "Olaf";
    $fave_food = "Takoyaki";
    $olaf_email = "olaf12@gmail.com";

    $x = $y = $z = "Banana"; // Shares the same value.
    
    echo"===================== String ======================<br/><br/>";
    
    echo $restaurant; // String literal = printing out the message directly. 

    echo"<br/><br/> Name: {$name}<br/>";
    echo"{$name} likes: {$fave_food}<br/><br/>";

    echo"Customer 1 ordered: {$x}<br/>";
    echo"Customer 2 ordered: {$y}<br/>";
    echo"Customer 3 ordered: {$z}<br/><br/>";


    // ======================== Integer ========================
    

    echo"================== Integer & Float ==================<br/><br/>";

    $tako_price = 3;


                       // Escape sequence for preceding with a dollar sign.
    echo"Takoyaki price: \${$tako_price}<br/><br/>";


    // ======================== Float ========================


    $banana_price = 1.49;

    echo"Banana price: \${$banana_price}<br/><br/>";


    // ======================== Booleans ========================


    echo"==================== Boolean  =====================<br/><br/>";

    // Used internally in a program. Used for If Statements, and For Loop.
    $olaf_paid = true;
    $customer_paid = false;

    echo"Olaf paid \${$tako_price} for his {$fave_food} (true): {$olaf_paid}<br/>"; 
    echo"Customers paid \${$banana_price} for 1x {$x} (false): {$customer_paid}<br/><br/>"; // False = no output.


    // ======================== var_dump() ========================


    echo"================== var_dump() ==================<br/><br/>";

    // var_dump = returns for other data types.
    echo"var_dump() = returns the data type and the value.<br/><br/>";
    echo"var_dump(5) = ", var_dump(5), "<br/>";
    echo"var_dump(\"Jones\") = ", var_dump("Jones"), "<br/>";
    echo"var_dump(NULL) = ", var_dump(NULL), "<br/><br/>";

    echo"var_dump($name) = ", var_dump($name);
?>