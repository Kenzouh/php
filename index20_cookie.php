<?php

    //! Make sure there are no blank lines nor HTML above the PHP tag.

    /*

    Cookie = User information stored in a user's web browser.
             used for targeted advertisements (e-commerce), 
             and browsing preferences (YouTube).
             Other sensitive data

    */

    // Cookies are stored as an associative array.
    
    // Arguments (associative array)
    // Elements:  Key,    Value, Expiration time, File Path
                                // Seconds in a day
    setcookie("fruit", "orange", time() + 86400, "/");
    setcookie("vegetable", "cabbage", time() + (86400 * 2), "/"); // 2 days
    setcookie("bread_spread", "peanut butter", time() + (86400 * 3), "/");
    
    setcookie("meal", "chicken curry", time() + 86400, "/");

                                    // way to delete a cookie
    setcookie("meal", "chicken curry", time() - 0, "/");

           // Cookie super global variable
    foreach($_COOKIE as $key => $value){
        echo"{$key} = {$value}<br/>";
    }

                     // key
    if(isset($_COOKIE["fruit"])){
        echo"BUY SOME {$_COOKIE["fruit"]}";
    }
    
    else{
        echo"Your fruit preference is unknown.";
    }
?>