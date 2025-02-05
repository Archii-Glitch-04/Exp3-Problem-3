<?php
// Set the cookie for the last visited page
$page = $_SERVER['PHP_SELF']; // Current page URL
$currentTimeInSeconds = time(); // Current time in seconds

// Store the data in a cookie with a 30-day expiration
setcookie('last_visited_page', $page, time() + 30 * 24 * 60 * 60, "/"); // expires in 30 days
setcookie('last_visited_time_in_seconds', $currentTimeInSeconds, time() + 30 * 24 * 60 * 60, "/"); // expires in 30 days
?>
