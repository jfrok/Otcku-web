<?php
session_start();

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']->ROLE === "ADMIN") {
    } else {
        header("location:../loginup/login", true);
    }
} else {
    header("location:../loginup/login", true);
}
if (isset($_GET['logout'])) {

    // Initialize the session

    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session.
    session_destroy();

    // Redirect to login page
    header("location:../loginup/login", true);
    exit;
}