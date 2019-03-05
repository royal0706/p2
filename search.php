<?php
require 'includes/helpers.php';
require 'Form.php';

use DWA\Form;

# We'll be storing data in the session, so initiate it
session_start();

$form = new Form($_GET);

#Get data from form request
$destination = $form->get('yourDestination');
$airfare = $form->get('yourAirfare');
$airfarecurrency = $form->get('airfarecurrency');
$hotel = $form->get('yourHotel');
$hotelcurrency = $form->get('hotelcurrency');
$months = $form->get('months');

$errors = $form->validate(
    [
        'yourDestination' => 'required|alpha',
        'yourAirfare' => 'required|numeric',
        'yourHotel' => 'required|numeric',
        'months' => 'required',
    ]
);

#Functions
if(!$form->hasErrors) {
    if ($airfarecurrency == 'USD') {
        $airfarecon = 1;
    } else if ($airfarecurrency == 'GBP') {
        $airfarecon = 1.35;
    } else if ($airfarecurrency == 'EUR') {
        $airfarecon = 1.12;
    }

    $airfaretotal = $airfare * $airfarecon;

    if ($hotelcurrency == 'USD') {
        $hotelcon = 1;
    } else if ($hotelcurrency == 'GBP') {
        $hotelcon = 1.35;
    } else if ($hotelcurrency == 'EUR') {
        $hotelcon = 1.12;
    }

    $hoteltotal = $hotel * $hotelcon;
    $total = ($airfaretotal + $hoteltotal);

    if ($months == 'threemonths') {
        $monthnumber = 3;
    } else if ($months == 'sixmonths') {
        $monthnumber = 6;
    } else if ($months == 'twelvemonths') {
        $monthnumber = 12;
    } else if ($months == 'twentyfourmonths') {
        $monthnumber = 24;
    }

    $save = $total / $monthnumber;
    $saveround = round($save);
}

# Store our results data in the SESSION so it's available when we redirect back to index.php
$_SESSION['results'] = [
    'errors' => $errors,
    'hasErrors' => $form->hasErrors,
    'yourDestination' => $destination,
    'yourAirfare' => $airfare,
    'airfarecurrency' => $airfarecurrency,
    'yourHotel' => $hotel,
    'hotelcurrency' => $hotelcurrency,
    'months' => $months,
    'saveround' => $saveround,
];

# Redirect back to index.php
header('Location: index.php');