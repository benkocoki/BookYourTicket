<?php
require_once('rows.php');

/**
* definisanje koliko redova i sedista svaka strana
*/
class Compartment 
{
	public $rows = array();
	function __construct($numOfRows, $numOfSeats)
	{
		for ($i=0; $i < $numOfRows; $i++) { 
			array_push($this->rows, new Row($numOfSeats));
		}
	}
}