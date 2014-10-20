<?php

include 'loader.php';

$dbManager = new DatabaseConnectionManager();
$pdo = $dbManager->createConnection();

$productRepository = new ProductRepository($pdo);

$products = $productRepository->findAll();


$viewRenderer = new ViewRenderer();
$viewRenderer->setModel(
	new ViewModel(
		array(
			'products' => $products,
			'config'   => $config,
		),
		'default-layout'
	)
);
echo $viewRenderer->render('index');
