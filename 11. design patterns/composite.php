<?php

interface Unit
{
	public function getPower();
}

class Soldier implements Unit
{
	public function getPower()
	{
		return 10;
	}
}

class Tank implements Unit
{
	public function getPower()
	{
		return 50;
	}
}

class AirForce implements Unit
{
	public function getPower()
	{
		return 100;
	}
}

class Team implements Unit
{
	public $name;
	
	private $units = array();
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function addUnit(Unit $unit, $number)
	{
		$this->units[] = array('unit' => $unit, 'number' => $number);
	}
	
	public function getPower()
	{
		$power = 0;
		
		foreach ($this->units as $row) {
			$power += $row['unit']->getPower() * $row['number'];
		}
		
		return $power;
	}
}


// soldier  : 10 power
// tank     : 50 power
// airforce : 100 power

// team A : 10 soldiers, 1 tank
// team B : 5 soldiers, 2 tanks

$teamA = new Team('A');
$teamA->addUnit(new Soldier(), 11);
$teamA->addUnit(new Tank(), 1);
$teamA->addUnit(new AirForce(), 1);

$teamB = new Team('B');
$teamB->addUnit(new Soldier(), 11);
$teamB->addUnit(new Tank(), 2);

$teamA->addUnit($teamB, 1);

// perang
$powerTeamA = $teamA->getPower();
$powerTeamB = $teamB->getPower();

//$powerTeamA = 10 * $teamA->getSoldier() + 50 * $teamA->getTank() + 100 * $teamA->getAirForce();
//$powerTeamB = 10 * $teamB->getSoldier() + 50 * $teamB->getTank() + 100 * $teamB->getAirForce();

var_dump($powerTeamA);
var_dump($powerTeamB);



