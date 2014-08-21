<!DOCTYPE html>
<html>
<head>
    <title>third question</title>
</head>
<body>
    <form method="post" action="">
        <label for="firstAmount">Enter Amount</label>
        <input type="text" name="firstAmount" id="firstAmount"> <br />
        <input type="radio" name="currency" value="usd" id="usd">
        <label for="usd">USD</label>
        <input type="radio" name="currency" value="usd" id="eur">
        <label for="eur">EUR</label>
        <input type="radio" name="currency" value="usd" id="bgn">
        <label for="bgn">BGN</label> <br />
        <label for="secondAmount">Compound Interest Amount</label>
        <input type="text" name="secondAmount" id="secondAmount"> <br />
        <select name="duration">
            <option value="6months">6 months</option>
            <option value="1year">1 year</option>
            <option value="2years">2 years</option>
            <option value="5years">3 years</option>
        </select>
        <input type="submit" value="Calculate" name="submit">
    </form>
</body>
</html>
<?php
    if($_POST){
        $amount = $_POST['firstAmount'];
        $currency = $_POST['currency'];
        $duration = $_POST['duration'];
        $interests = $_POST['secondAmount'];

        if($amount === "") die;
        if($currency === "") die;
        if($duration === "") die;
        if($interests === "") die;

        if($duration == '6months') $duration = 6;
        elseif ($duration == '1year') $duration = 12;
        elseif ($duration == '2years') $duration = 24;
        elseif ($duration == '5years') $duration = 60;

        $result = round($amount * pow(1 + (($interests / 100) / 12), $duration / 12 * 12), 2);

        if ($currency == 'usd') $result = '&#36; ' . $result;
        elseif ($currency == 'eur') $result = '&#8364; ' . $result;
        elseif ($currency == 'bgn') $result = 'лв ' . $result;

        echo $result;
    }
?>