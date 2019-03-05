<?php
require 'includes/helpers.php';
require 'logic.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Trip Jar</title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather%7CRoboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/app.css">
    <meta charset="utf-8">

</head>
<body>
<div class="main">

    <h1>Trip Jar</h1>

    <img src='images/traveljar.jpg' alt='Travel Jar'>

    <h2>Trip Saving Calculator</h2>
    <p>Calculate how much you need to save a month to make the trip of your dreams become a reality!</p>

    <form method='GET' action='search.php'>

        <label>Destination:</label>
        <input type='text' name='destination' value='<?= $destination ?? '' ?>'>

        <label>Airfare Total:</label>
        <input type='number' name='airfare' value='<?= $airfare ?? '' ?>'>
        <label>Currency</label>
        <select name='airfareCurrency'>
            <option value='usd' <?php if (isset($airfareCurrency) and $airfareCurrency == 'usd') echo 'selected' ?>>USD</option>
            <option value='gbp' <?php if (isset($airfareCurrency) and $airfareCurrency == 'gbp') echo 'selected' ?>>GBP</option>
            <option value='eur' <?php if (isset($airfareCurrency) and $airfareCurrency == 'eur') echo 'selected' ?>>EUR</option>
        </select>

        <label>Hotel Total:</label>
        <input type='number' name='hotel' value='<?= $hotel ?? '' ?>'>
        <label>Currency</label>
        <select name='hotelCurrency'>
            <option value='usd' <?php if (isset($hotelCurrency) and $hotelCurrency == 'usd') echo 'selected' ?>>USD</option>
            <option value='gbp' <?php if (isset($hotelCurrency) and $hotelCurrency == 'gbp') echo 'selected' ?>>GBP</option>
            <option value='eur' <?php if (isset($hotelCurrency) and $hotelCurrency == 'eur') echo 'selected' ?>>EUR</option>
        </select>

        <label>How long do you have to save for your trip? </label>
        <ul class='radios'>
            <li><label><input type='radio'
                              name='months'
                              value='three' <?php if (isset($months) and $months == 'three') echo 'checked' ?>>Three Months</label>
            <li><label><input type='radio'
                              name='months'
                              value='six' <?php if (isset($months) and $months == 'six') echo 'checked' ?>>Six Months</label>
            <li><label><input type='radio'
                              name='months'
                              value='twelve' <?php if (isset($months) and $months == 'twelve') echo 'checked' ?>>One Year</label>
            <li><label><input type='radio'
                              name='months'
                              value='twentyfour' <?php if (isset($months) and $months == 'twentyfour') echo 'checked' ?>>Two Years</label>
        </ul>


        <input type='submit' value='Start Saving' class='btn btn-primary'>
    </form>


    <div class='results'>
        <?php if ($hasErrors) : ?>
            <div class='danger'>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>

        <?php if (!$hasErrors): ?>
        <?php if (isset($destination)): ?>
            <div class='alert'
                 role='alert'>For your trip to <?= $destination ?>, you will need to save the following amount per month:
            </div>
        <?php endif; ?>

        <?php if (isset($saveRound)): ?>
            <div class='alert-primary'>$<?= $saveRound ?></div>
        <?php endif; ?>
    </div>
    <?php endif ?>
</div>

</body>
</html>