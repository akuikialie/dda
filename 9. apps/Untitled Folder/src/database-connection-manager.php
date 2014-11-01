<?php

class DatabaseConnectionManager
{
	public function createConnection()
	{
		$db = new PDO('mysql:host=localhost;dbname=dda_app', 'root', 'apple');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		return $db;
	}
}
