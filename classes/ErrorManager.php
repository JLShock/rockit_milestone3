<?php


class ErrorManager {

	addError($name, $message)
	getError($name)
	hasErrors()

}


$errors = new ErrorManager();

$errors->addError('username', 'This value isn\'t set');

if ($errors->hasErrors()) {
    // this would happen because our error object has errors
}