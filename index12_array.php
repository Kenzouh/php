<!DOCTYPE html>
<html lang="en">
<head>

    <title>PHP | Array</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Arrays in PHP."/>
    <meta name="keywords" content="PHP, Array"/>
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
    // Array (special type of variable) = can hold multiple values. 

    /* 
    $color1 = "Black";
    $color2 = "Brown";
    $color3 = "White";
    $color4 = "Yellow";
    $color5 = "Green";
    $color6 = "Red";
    */

            // function
                //   0          1        2        3         4       5
    $colors = array("Black", "Brown", "White", "Yellow", "Green", "Red");

    echo $colors[0] . "<br/>";
    echo $colors[1] . "<br/>";
    echo $colors[2] . "<br/>";
    echo "{$colors[3]}<br/>";
    echo "{$colors[4]}<br/>";
    echo "{$colors[5]}<br/><br/>";

    // echo"{$foods[4]}<br/>"; // Will cause a warning since this doesn't exist

    echo "<p style='color: blue;'>\$foods[1][2] = Brown's third Letter: " . $colors[1][2] ."</p>";

    echo "<br/><br/><b>======== Displaying using foreach() ========</b><br/><br/>";


    echo"foreach(\$colors as \$color){<br/>";
    echo"____echo \$color . \"br\";<br/>";
    echo"}<br/><br/>";

                     // $color (temporary name) = MUST BE THE SINGULAR VERSION FOR CONVENTION PURPOSES!
    foreach($colors as $color){
        echo $color . "<br/>";
    }

    // ================================================================================

    echo "<br/><br/><b>======== Changing Index 0 ========</b><br/><br/>";

    echo"<p style='color: blue;'>\$colors[0] = \"Pink\";</p>";

    $colors[0] = "Pink"; 

    foreach($colors as $color){
        echo $color . "<br/>";
    }

    // ================================================================================

    echo "<br/><br/><b>======== Push Function: Uploads a value in the end. ========</b><br/><br/>";


    echo"<p style='color: blue;'>array_push(\$colors, \"Gray\");</p>";

    array_push($colors, "Gray");

    foreach($colors as $color){
        echo $color . "<br/>";
    }

    echo"<br/><p style='color: blue;'>array_push(\$colors, \"Orange\", \"Purple\");</p><br/>";

    // You can add 2 values or more.
    array_push($colors, "Orange", "Purple");

    foreach($colors as $color){
        echo $color . "<br/>";
    }

    // ================================================================================

    echo "<br/><br/><b>======== Pop Function: Pops last value ========</b><br/><br/>";

    echo"<p style='color: blue;'>array_pop(\$colors);</p>";

    array_pop($colors);

    foreach($colors as $color){
        echo $color . "<br/>";
    }

    // ================================================================================
    
    echo "<br/><br/><b>======== Shift = removes first element  ========</b><br/><br/>";

    echo"<p style='color: blue;'>array_shift(\$colors);</p>";

    array_shift($colors);

    foreach($colors as $color){
        echo $color . "<br/>";
    }

    // ================================================================================

    echo "<br/><br/><b>======== Reverse ========</b><br/><br/>";

    echo"<p style='color: blue;'>\$reversed_colors = array_reverse(\$colors);</p>";

    // $reversed_colors can also be "$colors"
    $reversed_colors = array_reverse($colors);

    foreach($reversed_colors as $color){
        echo $color . "<br/>";
    }

    echo"<p style='color: blue;'>\$colors = array_reverse(\$reversed_colors)</p>";  

    $colors = array_reverse($reversed_colors);

    foreach($colors as $color){
        echo $color . "<br/>";
    }

    // ================================================================================

    echo "<br/><br/><b>======== Count ========</b><br/><br/>";

    echo "<p style='color: blue;'>count(\$colors);</p>";
    echo count($colors);
?>