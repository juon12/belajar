<?php

include "koneksi.php";

$sql = "SELECT nama_barang, jumlah_barang, tgl_masuk, keadaan_barang FROM barang";

$data = mysqli_query($koneksi, $sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Inventory Barang</title>
</head>
<body>
	<label>Barang yang ada di Gudang</label><br>
	<a href="input_barang.php">Tambah Barang Baru</a>
	<table border="1px">
		<tr>
			<th>Nama Barang</th>
			<th>Jumlah Barang</th>
			<th>Tanggal Masuk</th>
			<th>Jenis Barang</th>
			<th>Keadaan Barang</th>
		</tr>
<?php
	foreach ($data as $barang):
	?>
		<tr>
			<td><?php echo $barang['nama_barang'];?></td>
			<td><?php echo $barang['jumlah_barang'];?></td>
			<td><?php echo $barang['tgl_masuk'];?></td>
			<td></td>
			<td><?php echo $barang['keadaan_barang'];?></td>
		</tr>
<?php endforeach; ?>

	</table>

</body>
</html>