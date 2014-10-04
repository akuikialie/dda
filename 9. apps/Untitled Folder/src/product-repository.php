<?php

class ProductRepository
{
	protected $db;
	
	public function __construct(PDO $db)
	{
		$this->db = $db;
	}
	
	public function findAll()
	{
		$products = array();
		
		foreach ($this->db->query('SELECT * FROM products') as $row) {
			$product = new Product();
			$product->setTitle($row['name']);
			$product->setPrice($row['price']);
			
			$products[] = $product;
		}
		
		return $products;
	}
	
	public function findOneById($id)
	{
		foreach ($this->db->query('SELECT * FROM products WHERE id = ' . (int)$id) as $row) {
			$product = new Product();
			$product->setTitle($row['name']);
			$product->setPrice($row['price']);
			
			return $product;
		}
	}
	
	public function insert(Product $product)
	{
		$name  = $product->getTitle();
		$price = $product->getPrice();
		
		$sql = "INSERT INTO products(name, price) VALUES('$name', '$price')";
		
		$this->db->exec($sql);
	}
}
