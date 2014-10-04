<?php

include 'src/product.php';
include 'src/product-repository.php';
include 'src/database-connection-manager.php';

$dbManager = new DatabaseConnectionManager();
$pdo = $dbManager->createConnection();

$productRepository = new ProductRepository($pdo);

$products = $productRepository->findAll();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div id="main-nav">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Handphone</a></li>
				<li><a href="#">Komputer</a></li>
				<li><a href="#">Aksesoris</a></li>
			</ul>
		</div>
		<div class="products">
			<h1>Products</h1>
			<?php foreach ($products as $product): ?>
			<div class="product">
				<h3 class="product-title"><a href="#"><?php echo $product->getTitle(); ?></a></h3>
				<img src="img/lenovo-laptop-essential-g580-metal-brown-back-2L.jpg" width="300" height="auto" /><br />
				<span class="product-price">Rp <?php echo $product->getPrice(); ?></span>
				<a class="btn-beli" href="#">Beli</a>
			</div>
			<?php endforeach; ?>
		</div>
	</body>
</html>
