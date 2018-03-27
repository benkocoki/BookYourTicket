<?php

require_once('seat.php');

/**
* unos sedista
*/
class Row
{
	public $seats = array();
	function __construct($numOfSeatsPerRow)
	{
		for ($i=0; $i < $numOfSeatsPerRow; $i++) { 
			array_push($this->seats, new Seat());
		}
	}
}