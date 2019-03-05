<?php
require 'includes/helpers.php';
require 'logic.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Trip Jar</title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto+Condensed" rel="stylesheet">
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
        <input type='text' name='yourDestination' value='<?= $destination ?? '' ?>'>

        <label>Airfare Total:</label>
        <input type='number' name='yourAirfare' value='<?= $airfare ?? '' ?>'>
        <label for='currency'>Currency</label>
        <select name='airfarecurrency'>
            <option value='USD' <?php if (isset($airfarecurrency) and $airfarecurrency == 'USD') echo 'selected' ?>>USD</option>
            <option value='GBP' <?php if (isset($airfarecurrency) and $airfarecurrency == 'GBP') echo 'selected' ?>>GBP</option>
            <option value='EUR' <?php if (isset($airfarecurrency) and $airfarecurrency == 'EUR') echo 'selected' ?>>EUR</option>
        </select>

        <label>Hotel Total:</label>
        <input type='number' name='yourHotel' value='<?= $hotel ?? '' ?>'>
        <label for='currency'>Currency</label>
        <select name='hotelcurrency'>
            <option value='USD' <?php if (isset($hotelcurrency) and $hotelcurrency == 'USD') echo 'selected' ?>>USD</option>
            <option value='GBP' <?php if (isset($hotelcurrency) and $hotelcurrency == 'GBP') echo 'selected' ?>>GBP</option>
            <option value='EUR' <?php if (isset($hotelcurrency) and $hotelcurrency == 'EUR') echo 'selected' ?>>EUR</option>
        </select>

        <label>How long do you have to save for your trip? </label>
        <ul class='radios'>
            <li><label><input type='radio'
                              name='months'
                              value='threemonths' <?php if (isset($months) and $months == 'threemonths') echo 'checked' ?>>Three Months</label>
            <li><label><input type='radio'
                              name='months'
                              value='sixmonths' <?php if (isset($months) and $months == 'sixmonths') echo 'checked' ?>>Six Months</label>
            <li><label><input type='radio'
                              name='months'
                              value='twelvemonths' <?php if (isset($months) and $months == 'twelvemonths') echo 'checked' ?>>One Year</label>
            <li><label><input type='radio'
                              name='months'
                              value='twentyfourmonths' <?php if (isset($months) and $months == 'twentyfourmonths') echo 'checked' ?>>Two Years</label>
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

        <?php if (isset($saveround)): ?>
            <div class='alert-primary'>$<?= $saveround ?></div>
        <?php endif; ?>
    </div>
    <?php endif ?>
</div>

</body>
</html>