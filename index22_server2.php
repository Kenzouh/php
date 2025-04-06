<!DOCTYPE html>

<html lang="en">
<head>
    <title>PHP Server 2</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Implementing Server 2 in PHP."/>
    <meta name="keywords" content="PHP, Server"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

                    <!-- $_SERVER["PHP_SELF"] = contains the value of the current file path for this file. -->
                    <!-- The form will always work even if you change the file name thanks to PHP_SELF. -->
                    <!-- Try changing the name of the file to see how it goes. -->

                    <!-- Downside: vulnerable to cross-site scripts. -->
                    <!-- Solution to stop cross-site scripts = "htmlspecialchars()"-->

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

        <label>User ID:</label><br/>
        <input type="number" name="user_id"/><br/>

        <label>Password:</label><br/>
        <input type="password" name="password"/><br/>

        <input type="submit"/><br/>

    </form><br/>

</body>
</html>

<?php

    foreach($_SERVER as $key => $value){
        echo"{$key} = {$value}<br/>";
    }

    // for checking if you truly submitted the forms.
    // Better than the usual if(isset($_POST[""])) method    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo"<h1 style='color: red;'>Look at the value of \$_SERVER above!
             It changed after you inputted an answer.</h1>";
    }

?>