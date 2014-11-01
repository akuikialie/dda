<?php

// echo daftar user
// echo ===daftar user===

interface RegistrasiUserStrategy
{
	public function registerUser($data);
}

class Implementasi1 implements RegistrasiUserStrategy
{
	public function registerUser($data)
	{
		echo 'daftar user';
	}
}

class Implementasi2 implements RegistrasiUserStrategy
{
	public function registerUser($data)
	{
		echo '==daftar user==';
	}
}

class ActionRegistrasiUser
{
	public function setStrategy(RegistrasiUserStrategy $strategy)
	{
		$this->strategy = $strategy;
	}
	
	public function getStrategy()
	{
		return $this->strategy;
	}
	
	public function run($data)
	{
		echo $this->strategy->registerUser($data);
	}
}

$actionRegisterUser = new ActionRegistrasiUser();

$actionRegisterUser->setStrategy(new Implementasi2());

$actionRegisterUser->run(array());

