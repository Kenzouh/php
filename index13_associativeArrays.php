<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP | Associative Arrays</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Associative Arrays in PHP."/>
    <meta name="keywords" content="Associative Arrays, Array, PHP"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

</body>
</html>

<?php

    // Associative Array = Array made of key-value pairs.

    //   Key         Value
    // countries => capitals
    // countries => languages
    // id        => username
    // item      => price

    $countries = array(
                        "China" => "Chinese",
                        "Japan" => "Japanese",
                        "Thailand" => "Thai",
                        "Vietnam" => "Vietnamese"
                      );

    echo "China's language: " . $countries["China"] . "<br/>";
    echo "Japan's language: {$countries["Japan"]}<br/>";
    echo "Thailand's language: " . $countries["Thailand"] . "<br/>";
    echo "Vietnam's language: " . $countries["Vietnam"] . "<br/>"; 

    // =========================================================================

    echo"<br/><br/><b>============== foreach() ==============</b><br/><br/>";

    echo"<p style='color: blue;'>foreach(\$countries as \$country)</p>";

    foreach($countries as $country){
        echo"{$country}<br/>";
    }

    // =========================================================================

    echo"<br/><br/><b>============== foreach() ==============</b><br/><br/>";

    echo"<p style='color: blue;'>foreach(\$countries as \$key => \$value)</p><br/>";

    foreach($countries as $key => $value){
        echo "{$key}: {$value}<br/>";
    }

    // =========================================================================

    echo"<br/><br/><b>============== Changing a value ==============</b><br/><br/>";

    echo"<p style='color: blue;'>\$countries[\"China\"] = \"Simplified Chinese\";</p><br/>";

    $countries["China"] = "Simplified Chinese";

    foreach($countries as $key => $value){
        echo "{$key}: {$value}<br/>";
    }

    // =========================================================================

    echo"<br/><br/>============== Adding new Key-Value Pair ==============<br/><br/>";

    echo"<p style='color: blue;'>\$countries[\"Taiwan\"] = \"Taiwanese\";</p><br/>";

    // Same syntax as previous one. But the other one matches the key, so it changes the value instead.
    $countries["Taiwan"] = "Taiwanese";

    foreach($countries as $key => $value){
        echo "{$key}: {$value}<br/>";
    }

    // =========================================================================

    echo"<br/><br/><b>============== Pop Function ==============</b><br/><br/>";

    array_pop($countries);

    echo"<p style='color: blue;'>array_pop(\$countries);</p><br/>";

    foreach($countries as $key => $value){
        echo"{$key}: {$value}<br/>";
    }

    // =========================================================================

    echo"<br/><br/><b>============== Shift Function: Removes first value ==============</b><br/><br/>";

    echo"<p style='color: blue;'>array_shift(\$countries);</p><br/>";

    array_shift($countries);

    foreach($countries as $key => $value){
        echo"{$key}: {$value}<br/>";
    }

    // =========================================================================

    echo"<br/><br/><b>============== Keys Function ==============</b><br/><br/>";

    echo"<p style='color: blue;'>\$keys = array_keys(\$countries);</p><br/>";

    $keys = array_keys($countries);

    foreach($keys as $key){
        echo "{$key}<br/>";
    }

    // =========================================================================

    echo"<br/><br/><b>============== Values Function ==============</b><br/><br/>";

    echo"<p style='color: blue;'>\$values = array_values(\$countries);</p><br/>";

    $values = array_values($countries);

    foreach($values as $value){
        echo"{$value}<br/>";
    }

    // =========================================================================

    echo"<br/><br/><b>============== Flip Function = flips KEY and VALUE  ==============</b><br/><br/>";

    echo"<p style='color: blue;'>\$countries = array_flip(\$countries);</p><br/>";

    $countries = array_flip($countries);

    foreach($countries as $key => $value){
        echo"{$key}: {$value}<br/>";
    }

    // =========================================================================

    echo"<br/><br/><b>============== Flip Function = flips KEY and VALUE  ==============</b><br/><br/>";

    echo"<p style='color: blue;'>\$countries = array_flip(\$countries);</p><br/>";

    $countries = array_flip($countries);

    foreach($countries as $key => $value){
        echo"{$key}: {$value}<br/>";
    }
    
    // =========================================================================

    echo"<br/><br/><b>============== Reverse Function = REVERSES the order of your PAIRS  ==============</b><br/><br/>";

    echo"<p style='color: blue;'>\$countries = array_reverse(\$countries);</p><br/>";

    $countries = array_reverse($countries);

    foreach($countries as $key => $value){
        echo"{$key}: {$value}<br/>";
    }

    // =========================================================================

    echo"<br/><br/><b>============== Count Function = counts keys ==============</b><br/><br/>";

    echo"<p style='color: blue;'>echo \"Count: \" . count(\$countries);</p><br/>";

    echo "Count: " . count($countries);
?>