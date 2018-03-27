<?php

	require_once('stadium.php');

	$stadium = new Stadium(5, 7);
	
	function returnCompartment($stadium, $i){
		if ($i == 1){
			return $stadium->north;
		}
		else if ($i == 2){
			return $stadium->south;
		}
		else if ($i == 3){
			return $stadium->west;
		}
		else if ($i == 4){
			return $stadium->east;
		}
	}

	

	while (true) {
		$f = fopen('php://stdin', 'r');
		echo "Choose your compartment" . PHP_EOL;
		echo "1. North" . PHP_EOL;
		echo "2. South" . PHP_EOL;
		echo "3. West" . PHP_EOL;
		echo "4. East" . PHP_EOL;

		$compartment = fgets($f);
		

		echo "Choose your row number: " . PHP_EOL;
		$row = fgets($f);

		echo "Choose your seat number: " . PHP_EOL;

		$seat = fgets($f);

		$object = returnCompartment($stadium, (int)$compartment);

		if(((int)$row-1) > count($object->rows)){
			echo "Wrong... we have " . count($object->rows) . " rows" . PHP_EOL;
			continue;
		}
		//echo count($object->rows[(int)$row-1]->seats);
		if(((int)$seat-1) > count($object->rows[(int)$row-1]->seats)){
			echo "Wrong... we have " . count($object->rows[(int)$row-1]->seats) . " seats in selected row!" . PHP_EOL;
			continue;
		}

		if($object->rows[(int)$row-1]->seats[(int)$seat-1]->taken){
			echo "It is taken" . PHP_EOL;
			continue;
		}
		echo "Enter your first name" . PHP_EOL;
		$firstName = fgets($f);

		echo "Enter your last name" . PHP_EOL;
		$lastName = fgets($f);

		$object->rows[(int)$row-1]->seats[(int)$seat-1]->taken = true;
		$object->rows[(int)$row-1]->seats[(int)$seat-1]->customer = new Customer($firstName, $lastName);
		print_r($stadium);
	}
	

