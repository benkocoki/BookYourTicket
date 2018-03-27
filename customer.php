<?php

/**
* unos posetioca
*/
class Customer
{
	public $firstName;
	public $lastName;
	function __construct($firstName, $lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}
}