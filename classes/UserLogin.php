<?php


class UserLogin {

	startSession($username)

	isLogged()

	logout()

	getUsername()

}


session_start();

$userLogin = new UserLogin;

$userLogin->startSession('username');
if ($userLogin->isLogged()) {
    // This would happen because we're logged
}

$userLogin->logout();
if ($userLogin->isLogged()) {
    // This would not happen because we're not logged anymore
}