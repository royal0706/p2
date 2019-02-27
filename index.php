<?php require('index-logic.php'); ?>
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
    <p>Calculate how much you need to save a month to make the trip of your dreams become a reality!"</p>

    <h2>Expenses</h2>

    <form method='GET' action='text.php'>

        <label for='yourDestination'>Your Destination:</label>
        <input type='text' name='yourDestination' value=''>

        <label for='airfareTotal'>Airfare Total:</label>
        <input type='text' name='airfareTotal' value=''>

        <label for='hotelTotal'>Hotel Total:</label>
        <input type='text' name='hotelTotal' value=''>

        <label for='months'>How far away is you trip? </label>
        <select name='months' id='months'>
            <option value='choose'>Choose one option</option>
            <option value='threemonths' >Three Months</option>
            <option value='sixmonths' >Six Months</option>
            <option value='oneyear' >One Year</option>
            <option value='twoyears' >Two Years</option>
        </select>
        <input type='submit' class='btn btn-primary btn-sm'>

    </form>

    <a class='return' href='/forms-inputs'>


</div>

</body>
</html>