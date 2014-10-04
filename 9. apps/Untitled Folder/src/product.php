<?php

class Product
{
	private $title = 'default-title';
	
	private $price = 0;
	
	public function setTitle($title)
	{
		$this->title = $title;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function setPrice($price)
	{
		$this->price = $price;
	}
	
	public function getPrice()
	{
		return $this->price;
	}
}