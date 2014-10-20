<?php


// 1. tidak bisa di-instance melalui new
// 2. tidak bisa di-clone
// 3. mendapatkan instance melalui sebuah method
class DatabaseConnection
{
	public $username = 'user1';
	
	private static $instance;
	
	private function __construct()
	{
	}
	
	private function __clone()
	{
	}
	
	public static function getInstance()
	{
		if (self::$instance === null) {
			self::$instance = new DatabaseConnection();
		}
		
		return self::$instance;
	}
}

$conn1 = DatabaseConnection::getInstance();
$conn2 = DatabaseConnection::getInstance();
$conn3 = DatabaseConnection::getInstance();

$conn1->username = '1abc';

var_dump($conn2->username);
var_dump($conn3->username);
