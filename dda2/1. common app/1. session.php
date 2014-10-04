<?php

session_start();

if (empty($_SESSION['kota'])) {
	$_SESSION['kota'] = array(
		'surabaya',
		'jakarta',
		'bandung',
	);
}

$data = $_SESSION['kota'];

if (!empty($_POST['nama'])) {
	$data[] = $_POST['nama'];
}

if (!empty($_POST['nama2'])) {
	$data[] = $_POST['nama2'];
}

$_SESSION['kota'] = $data;

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Test Session</title>
	</head>
	<body>
		<div>
			<?php
				echo '<strong>Ada ' . count($data) . ' kota:</strong><br />';
				foreach ($data as $kota) {
					echo $kota . ' <a href="#">[x]</a>' . ' <br />';
				}
				echo '<br />';
			?>
		</div>
		<form method="POST" action="">
			<label>Masukkan nama kota : </label>
			<input type="text" name="nama" />
			<br />
			<label>Masukkan nama kota 2 : </label>
			<input type="text" name="nama2" />
			<br />
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>
