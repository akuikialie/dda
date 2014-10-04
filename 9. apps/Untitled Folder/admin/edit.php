<?php

include '../src/product.php';
include '../src/product-repository.php';
include '../src/database-connection-manager.php';

$dbManager = new DatabaseConnectionManager();
$pdo = $dbManager->createConnection();

$productRepository = new ProductRepository($pdo);

$product = $productRepository->findOneById($_GET['id']);

if (!empty($_POST)) {
	
	$product->setTitle($_POST['nama-produk']);
	$product->setPrice($_POST['harga-produk']);
	
	$productRepository->insert($product);
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../css/style.css" />
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
		<div class="container">
			<h1><a href="index.php">Products</a> &gt; Tambah</h1>
			<form class="input-form" method="post" action="">
				<fieldset>
					<legend>Tambah Produk</legend>
					<div>
						<label for="nama-produk">Nama Produk</label> :
						<input type="text" id="nama-produk" name="nama-produk" value="<?php echo $product->getTitle() ?>" placeholder="Masukkan nama produk" />
					</div>
					<div>
						<label for="harga-produk">Harga Produk</label> :
						<input type="text" id="harga-produk" name="harga-produk" value="<?php echo $product->getPrice() ?>" placeholder="Masukkan harga produk" />
					</div>
					<div class="buttons">
						<button type="submit" name="btn-simpan">Simpan</button>
					</div>
				</fieldset>
			</form>
		</div>
	</body>
</html>
