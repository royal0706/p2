<?php
session_start();

$hasErrors = false;

# Get `results` data from session, if available
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $destination = $results['yourDestination'];
    $airfare = $results['yourAirfare'];
    $airfarecurrency = $results['airfarecurrency'];
    $hotel = $results['yourHotel'];
    $hotelcurrency = $results['hotelcurrency'];
    $months = $results['months'];
    $saveround = $results['saveround'];
    $errors = $results['errors'];
    $hasErrors = $results['hasErrors'];
}

# Clear session data so our search is cleared when the page is refreshed
session_unset();
