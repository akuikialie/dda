<?php

include 'loader.php';

$dbManager = new DatabaseConnectionManager();
$pdo = $dbManager->createConnection();

$productRepository = new ProductRepository($pdo);

$products = $productRepository->findAll();

include 'index.view.php';
