<?php


class UsernameValidator extends Validator {
	protected $pattern = "/^[a-zA-Z]{5,}$/";
}