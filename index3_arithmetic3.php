<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP | Arithmetic 3</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="PHP Arithmetic and String Operators"/>
    <meta name="keywords" content="PHP, Arithmetic, String, Operators"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>


    <link rel="stylesheet" href="css/style3_3.css"/>
    <link rel="icon" type="imgage/jpg" href="img/favicon.jpg"/>
</head>
<body>
    <?php

        echo"<h1>~~~~~ Arithmetic and String Operators ~~~~~</h1>";

        // ============== Arithmetic Operators & ==============

        $num1 = 25;
        $num2 = 4;

        $sum = $difference = $product = $quotient = $power = $remainder = null;
        
        echo"<h2>Arithmetic Operators</h2>";

        echo"<ul>";
            
        // Sum
        $sum = $num1 + $num2;

            echo"<li>
                    <span class='title'> Addition&colon; </span>
                    <span class='solution'>{$num1} + {$num2} = </span>
                    <span class='answer'>{$sum}</span>           
                </li>";

        $sum = 50 + $num2;
            echo"<li>
                    <span class='title'> Addition&colon; </span>
                    <span class='solution'>50 + {$num2} = </span>
                    <span class='answer'>{$sum}</span>
                </li>";

        $sum = $num1 + 900;
            echo"<li>
                    <span class='title'> Addition&colon; </span>
                    <span class='solution'>{$num1} + 900 = </span>
                    <span class='answer'>{$sum}</span>
                </li><br/>";

        // Difference
        $difference = $num1 - $num2;
            echo"<li>
                    <span class='title'> Subtraction&colon; </span>
                    <span class='solution'>{$num1} - {$num2} = </span>
                    <span class='answer'>{$difference}</span>
                </li>";

        $difference = $num2 - $num1;
            echo"<li>
                    <span class='title'> Subtraction&colon; </span>
                    <span class='solution'>{$num2} - {$num1} = </span>
                    <span class='answer'>{$difference}</span>
                </li><br/>";

        // Product
        $product = $num1 * $num2;
            echo"<li>
                    <span class='title'> Product&colon; </span>
                    <span class='solution'>{$num1} * {$num2} = </span>
                    <span class='answer'>{$product}</span>
                </li>";

        // Quotient            
        $quotient = $num1 / $num2;
            echo"<li>
                    <span class='title'> Quotient&colon; </span>
                    <span class='solution'>{$num1} / {$num2} = </span>
                    <span class='answer'>{$quotient}</span>
                </li>";

        // Power
        $power = $num1 ** $num2;
            echo"<li>
                    <span class='title'> Power&colon; </span>
                    <span class='solution'>{$num1} ** {$num2} = </span>
                    <span class='answer'>{$power}</span>
                </li>";

        // Remainder
        $remainder = $num1 % $num2;
            echo"<li>
                    <span class='title'> Remainder&colon; </span>
                    <span class='solution'>{$num1} % {$num2} = </span>
                    <span class='answer'>{$remainder}</span>
                </li>";

        $remainder = 40 % 2;
            echo"<li>
                    <span class='title'> Remainder&colon; </span>
                    <span class='solution'>40 % 2 = </span>
                    <span class='answer'>{$remainder}</span>
                </li>";

        echo"</ul>";
        

        // ============== Increment/Decrement Operators ==============

        echo"<h1>~~~~~ Increment/Decrement Operators ~~~~~</h1>";

        $number = 100;

        // Expression = inefficient way of incrementing & decrementing.
        // $counter = $counter + 1;

        echo"<h2 class='increment'>Increment Operators</h2>";
        echo"<h3> number = {$number}</h3>";


        ++$number;
        echo"<h3 class='increment'>++number = <span>{$number}</span></h3>"; 
        
        echo"<h3 class='increment'>number++ = <span>{$number}</span></h3>";
        $number++;

        ++$number;
        echo"<h3 class='increment'>++number = <span>{$number}</span></h3><br/>";



        echo"<h2 class='decrement'>Decrement Operators</h2>";
        echo"<h3> number = {$number}</h3>";


        --$number;
        echo"<h3 class='decrement'>--number = <span>{$number}</span></h3>"; 
        
        echo"<h3 class='decrement'>number-- = <span>{$number}</span></h3>";
        $number--;

        --$number;
        echo"<h3 class='decrement'>--number = <span>{$number}</span></h3>";


        // ============== Operator Precedence ==============

        echo"<h1>~~~~~ Operator Precedence ~~~~~</h1>";


        echo"<h2>Operator Precedence (PEMDAS Rule)</h2><br><br>";

        echo"<h3>Parentheses: ()</h3>";
        echo"<h3>Exponents: **</h3>";
        echo"<h3>Multiplication: *</h3>";
        echo"<h3>Division: / %</h3>";
        echo"<h3>Addition: +</h3>";
        echo"<h3>Subtraction: -</h3><br/>";
    
        $total1 = 52 - 89 * (63 + 42) / 2 ** 3 + 4 - 2;
        // P =    52 - 89 *    105     / 2 ** 3 + 4 - 2
        // E =    52 - 89 *    105     /    8   + 4 - 2
        // M =    52 -   9345         /    8    + 4 - 2
        // D =    52 -             1168.125     + 4 - 2
        // A =                     1116.125     + 4 - 2
        // S =                    -1116.125     + 4 - 2
        //   =                    -1112.125         - 2
        //   =                                 1114.125
    
        echo"<h3>52 - 89 * (63 + 42) / 2 ** 3 + 4 - 2 = {$total1}</h3>";
        

        // ============== String Concatenation ==============

        echo"<h1>~~~~~ String Concatenation ~~~~~</h1>";
        $string1 = "Hi";
        $string2 = "there";

        echo"\$string1 . \" \" . \$string2 . \"!\"; = ";
        echo $string1 . " " . $string2 . "!";
    ?>
</body>
</html>