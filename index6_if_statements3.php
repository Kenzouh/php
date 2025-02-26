<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP | Math Functions 3</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Utilizing PHP Math Functions"/>
    <meta name="keywords" content="PHP, Math, Functions"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

    <h1>Shopping Discount</h1>

    <h3>Above $1000: 25% discount!</h3>
    <h3>Above $500: 15% discount!</h3>
    <h3>Above $100: 5% discount!</h3><br/>


    <form action="index6_if_statements3.php" method="post">
    
        <label>Amount Paid:</label><br/>
        <input type="number" name="amount"/><br/><br/>

        <input type="submit" value="Pay"/>

    </form><br/>

</body>
</html>

<?php

    $amount = $_POST["amount"];

    $discount = null;
    $total = null;

    

    if($amount >= 1000){

        echo"You paid: <b>\${$amount}</b><br/><br/>";

        echo"You get a <b>25%</b> discount!<br/><br/>";
        
        $discount = $amount * 0.25;
        $total = $amount - $discount;

        echo"===============<br/><br/>";

        echo"{$amount} * 0.25 = {$discount}<br/>";
        echo"Total = {$amount} - {$discount} = <b>\${$total}</b><br/><br/>";

        echo"===============<br/><br/>";

        echo"Your total is: <b>\${$total}</b><br/><br/>";

        echo"Thank you and come again! :D<br/>";
    }

    elseif($amount >= 500){

        echo"You paid: <b>\${$amount}</b><br/><br/>";

        echo"You get a <b>15%</b> discount!<br/><br/>";

        $discount = $amount * 0.15;
        $total = $amount - $discount;

        echo"===============<br/><br/>";

        echo"{$amount} * 0.15 = {$discount}<br/>";
        echo"Total = {$amount} - {$discount} = <b>\${$total}</b><br/><br/>";

        echo"===============<br/><br/>";

        echo"Your total is: <b>\${$total}</b><br/><br/>";

        echo"Thank you and come agan! :D<br/>";
    }

    elseif($amount >= 100){

        echo"You paid: <b>\${$amount}</b><br/><br/>";

        echo"You get a <b>5%</b> discount!<br/><br/>";

        $discount = $amount * 0.5;
        $total = $amount - $discount;

        echo"===============<br/><br/>";

        echo"{$amount} * 0.5 = {$discount}<br/>";
        echo"Total = {$amount} - {$discount} = <b>\${$total}</b><br/><br/>";

        echo"===============<br/><br/>";

        echo"Your total is: <b>\${$total}</b><br/><br/>";

        echo"Thank you and come again! :D<br/>";
    }

    elseif($amount < 0){
        echo"You cannot enter negative numbers.";
    }

    else{
        echo"That's not a number! Enter a number only.";
    }   
?>