<?php
require 'includes/helpers.php';
require 'logic.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Trip Jar</title>
    <meta charset="utf-8">

</head>
<body>
<div class="main">

    <h1>Trip Jar</h1>

    <img src='images/traveljar.jpg' alt='Travel Jar'>

    <h2>Trip Saving Calculator</h2>
    <p>Calculate how much you need to save a month to make the trip of your dreams become a reality!</p>

    <h2>Expenses</h2>

    <form method='GET' action='search.php'>

        <fieldset>
        <label >Your Destination:
        <input type='text' name='yourDestination' value=''></label><br><br>

        <label>Airfare Total:
        <input type='text' name='airfareTotal' value=''></label><br><br>

        <label for='hotelTotal'>Hotel Total:
        <input type='text' name='hotelTotal' value=''></label><br><br>

        <label for='months'>How long do you have to save for your trip?
        <select name='months' id='months'>
            <option value='choose'>Choose one option</option>
            <option value='threemonths' >Three Months</option>
            <option value='sixmonths' >Six Months</option>
            <option value='twelvemonths' >One Year</option>
            <option value='twentyfourmonth' >Two Years</option>
        </select></label><br><br>

        <input type='submit' value='Start Saving!' class='btn btn-primary'>
        </fieldset>
    </form>

    <a class='return' href='/forms-inputs'>


</div>

</body>
</html>