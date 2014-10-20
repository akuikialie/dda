<?php

include 'loader.php';

$dbManager = new DatabaseConnectionManager();
$pdo = $dbManager->createConnection();

$productRepository = new ProductRepository($pdo);
$product = $productRepository->findOneById((int)$_GET['id']);

?>
<?php include 'includes/header.php' ?>
		<div class="product">
			<h1><?php echo $product->getTitle() ?></h1>
			<img src="img/lenovo-laptop-essential-g580-metal-brown-back-2L.jpg" width="300" height="auto" /><br />
			<span class="product-price">Rp <?php echo $product->getPrice(); ?></span>
			<a class="btn-beli" href="#">Beli</a>
		</div>
<?php include 'includes/footer.php' ?>
