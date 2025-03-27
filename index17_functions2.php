<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Functions 2</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Functions in PHP Part 2."/>
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


            // Parameter = temporary variable that only exists in the scope of this function.
            //             If you get out of this function, the parameter no longer exists.
function friend($name){
    echo"Friend: {$name}<br/>";
    echo"Age: 8<br/>";
    echo"Fave Color: Green<br/><br/>";
}

    friend("Olaf");
    friend("Hana");
?>