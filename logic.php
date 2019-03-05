<?php
session_start();

$hasErrors = false;

# Get `results` data from session, if available
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $destination = $results['destination'];
    $airfare = $results['airfare'];
    $airfareCurrency = $results['airfareCurrency'];
    $hotel = $results['hotel'];
    $hotelCurrency = $results['hotelCurrency'];
    $months = $results['months'];
    $saveRound = $results['saveRound'];
    $errors = $results['errors'];
    $hasErrors = $results['hasErrors'];
}

# Clear session data so our search is cleared when the page is refreshed
session_unset();
