<?php


class Validator {

	protected $pattern;

	function isValid($string) {
		if (preg_match($this->pattern, $string)) {
            return true;
        } else {
        	return false;
        }
	}

}