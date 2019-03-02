<?php
require 'includes/helpers.php';
require 'logic.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <link rel="stylesheet" type="text/css" href="styles/app.css">
    <title>Trip Jar</title>
    <meta charset="utf-8">

</head>
<body>
<div class="main">

    <h1>Trip Jar</h1>

    <img src='images/traveljar.jpg' alt='Travel Jar'>

    <h2>Trip Saving Calculator</h2>
    <p>Calculate how much you need to save a month to make the trip of your dreams become a reality!</p>

    <form method='GET' action='search.php'>

    <label>Destination:
    <input type='text' name='yourDestination' value=''></label>

    <label>Airfare Total:
    <input type='text' name='yourAirfare' value=''>
        <label for='currency'>Currency</label>
        <select>
            <option value='USD'>USD</option>
            <option value='GBP' >GBP</option>
            <option value='EUR' >EUR</option>
        </select>

     <label for='hotelTotal'>Hotel Total:
     <input type='text' name='yourHotel' value=''></label>
        <label for='currency'>Currency</label>
        <select>
            <option value='USD'>USD</option>
            <option value='GBP' >GBP</option>
            <option value='EUR' >EUR</option>
        </select>

    <label>How long do you have to save for your trip? </label>
         <ul class='radios'>
             <li><label><input type='radio' name='day' value='mon'>Three Months</label>
             <li><label><input type='radio' name='day' value='tue'>Six Months</label>
             <li><label><input type='radio' name='day' value='wed'>One Year</label>
             <li><label><input type='radio' name='day' value='thu'>Two Years</label>
         </ul>

         <input type='submit' value='Start Saving' class='btn btn-primary'>
    </form>

    <a class='return' href='/forms-inputs'>


</div>

</body>
</html>