<?php


require('classes/Validator.php');

require('classes/UsernameValidator.php');

require('classes/PasswordValidator.php');


session_start();


function isUserLoggedIn() {

    if(isset($_SESSION['username']) && strlen($_SESSION['username'])) {
        return true;
    } else {
        return false;
    }

}