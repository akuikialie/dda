<?php

include '../loader.php';

$dbManager = new DatabaseConnectionManager();
$pdo = $dbManager->createConnection();

$productRepository = new ProductRepository($pdo);

$products = $productRepository->findAll();

?>
<!DOCTYPE html>
<?php include '../includes/header.php' ?>
		<div class="container">
			<h1>Products</h1>
			<a class="btn" href="tambah.php">Tambah</a>
			<table class="gridview" style="width: 100%">
				<thead>
					<tr>
						<th>No</th>
						<th style="width: 250px">Foto Produk</th>
						<th>Nama Produk</th>
						<th style="width: 150px">Harga</th>
						<th style="width: 150px">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 0; foreach ($products as $product): ?>
					<tr>
						<td class="col-index"><?php echo ++$no ?></td>
						<td><img src="../img/lenovo-laptop-essential-g580-metal-brown-back-2L.jpg" width="300" height="auto" /></td>
						<td><a href="#"><?php echo $product->getTitle(); ?></a></td>
						<td>Rp <?php echo $product->getPrice(); ?></td>
						<td><a href="edit.php?id=<?php echo $product->getId() ?>">Edit</a> | <a href="#">Delete</a></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
<?php include '../includes/footer.php' ?>
