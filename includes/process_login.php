<?php
include_once 'db_connect.php';
include_once 'functions.php';
sec_session_start(); // Our custom secure way of starting a PHP session.
if (isset($_POST['username'], $_POST['p'])) {
    $username = $_POST['username'];
    $password = $_POST['p']; // The hashed password.

    if (login($username, $password, $mysqli) == true && voted($username, $mysqli) == false) {
        // Login success 
        header("Location:../votemr.php");
    } elseif (voted($username, $mysqli) == true) {
        header("Location:../index.php?already_voted=1");
    } elseif (checkbrute($username, $mysqli) == true) {
        header("Location: ../index.php?locked_out=1");
    } else {
        // Login failed 
        header("Location: ../index.php?error=1");
    }
} else {
    // The correct POST variables were not sent to this page. 
    header("Location:../index.php?unknown_error=1");
}