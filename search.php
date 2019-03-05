<?php
require 'includes/helpers.php';
require 'Form.php';

use DWA\Form;

# We'll be storing data in the session, so initiate it
session_start();

$form = new Form($_GET);

#Get data from form request
$destination = $form->get('destination');
$airfare = $form->get('airfare');
$airfareCurrency = $form->get('airfareCurrency');
$hotel = $form->get('hotel');
$hotelCurrency = $form->get('hotelCurrency');
$months = $form->get('months');

$errors = $form->validate(
    [
        'destination' => 'required|alpha',
        'airfare' => 'required|numeric',
        'hotel' => 'required|numeric',
        'months' => 'required',
    ]
);

#Functions
if(!$form->hasErrors) {
    if ($airfareCurrency == 'usd') {
        $airfareCon = 1;
    } else if ($airfareCurrency == 'gbp') {
        $airfareCon = 1.35;
    } else if ($airfareCurrency == 'eur') {
        $airfareCon = 1.12;
    }

    $airfareTotal = $airfare * $airfareCon;

    if ($hotelCurrency == 'usd') {
        $hotelCon = 1;
    } else if ($hotelCurrency == 'gbp') {
        $hotelCon = 1.35;
    } else if ($hotelCurrency == 'eur') {
        $hotelCon = 1.12;
    }

    $hotelTotal = $hotel * $hotelCon;
    $total = ($airfareTotal + $hotelTotal);

    if ($months == 'three') {
        $monthNumber = 3;
    } else if ($months == 'six') {
        $monthNumber = 6;
    } else if ($months == 'twelve') {
        $monthNumber = 12;
    } else if ($months == 'twentyfour') {
        $monthNumber = 24;
    }

    $save = $total / $monthNumber;
    $saveRound = round($save);
}

# Store our results data in the SESSION so it's available when we redirect back to index.php
$_SESSION['results'] = [
    'errors' => $errors,
    'hasErrors' => $form->hasErrors,
    'destination' => $destination,
    'airfare' => $airfare,
    'airfareCurrency' => $airfareCurrency,
    'hotel' => $hotel,
    'hotelCurrency' => $hotelCurrency,
    'months' => $months,
    'saveRound' => $saveRound,
];

# Redirect back to index.php
header('Location: index.php');