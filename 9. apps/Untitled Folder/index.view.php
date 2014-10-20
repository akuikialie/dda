<?php include 'includes/header.php' ?>
		<div class="products">
			<h1>Products</h1>
			<?php foreach ($products as $product): ?>
			<div class="product">
				<h3 class="product-title"><a href="view-product.php?id=<?php echo $product->getId() ?>"><?php echo $product->getTitle(); ?></a></h3>
				<img src="img/lenovo-laptop-essential-g580-metal-brown-back-2L.jpg" width="300" height="auto" /><br />
				<span class="product-price">Rp <?php echo $product->getPrice(); ?></span>
				<a class="btn-beli" href="#">Beli</a>
			</div>
			<?php endforeach; ?>
		</div>
<?php include 'includes/footer.php' ?>
