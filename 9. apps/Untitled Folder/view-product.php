<?php

include 'loader.php';

$dbManager = new DatabaseConnectionManager();
$pdo = $dbManager->createConnection();

$productRepository = new ProductRepository($pdo);
$product = $productRepository->findOneById((int)$_GET['id']);

$viewRenderer = new ViewRenderer();
$viewRenderer->setModel(new ViewModel(array(
										'product' => $product,
										'config'   => $config,
									),
									'default-layout'
							)
					);
echo $viewRenderer->render('view-product');
