<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Functions</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Functions in PHP."/>
    <meta name="keywords" content="PHP, Functions"/>
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

    // function = reusable code written.
    //            type () after function name to invoke/call it.
    //            () are like 2 telephones talking with each other that's why it's "function invocation/call"
    //            in programming, you don't have to repeat the code all the time, so reuse them!
    //            ex. add() subtract() multiply() divide()

    function lyrics(){
        echo"Never gonna give you up<br/>";
        echo"Never gonna let you down<br/>";
        echo"Never gonna run around and desert you<br/><br/>";
    }

    lyrics();
    lyrics();
    lyrics();
?>