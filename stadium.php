<?php
require_once('compartment.php');
/**
* Definisanje delova stadiona
*/
class Stadium
{
	public $north;
	public $south;
	public $west;
	public $east;

	function __construct($numOfRows, $numOfSeats)			
	{	
		$this->north = new Compartment($numOfRows, $numOfSeats);
		$this->south = new Compartment($numOfRows, $numOfSeats);
		$this->west = new Compartment($numOfRows, $numOfSeats);
		$this->east = new Compartment($numOfRows, $numOfSeats);
	}
}