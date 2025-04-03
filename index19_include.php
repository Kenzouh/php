<?php

    /*
        include() = Copies the content of a file (php/html/text)
                    and pastes it in your PHP file.
                    Useful for creating components, so you will only
                    edit one file which applies to every page you included it in.
    */

    include("./components/index19_header.html");
?>

<!DOCTYPE html>
<html lang="en">

<?php
    include("./components/index19_head.html");
?>

<body style="text-align: center; padding: 0px; margin: 0px;">

    <h1 style="font-size: 80px; padding: 20px;">This is the Home Page! :D</h1><br/>
    
    <h2 style="font-size: 60px; padding: 20px;">Welcome to the Home Page!</h2><br/><br/><br/>
</body>
</html>

<?php
    include("./components/index19_footer.html");
?>