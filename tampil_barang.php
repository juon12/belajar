<?php
include "koneksi.php";
$sql = "SELECT  nama_barang,jumlah_barang,tgl_masuk,keadaan from barang";

$data = mysqli_connect($koneksi,$sql)
?>
<!DOCTYPE html>
<html>
<head>
	<title>inventory</title>
</head>
<body>
	<label>barang di gudang</label>
	<table border="1px">
		<tr>
			<th>
				nama
			</th>
			<th>
				jumlah
			</th>
			<th>
				tanggal masuk
			</th>
			<th>
				jenis
			</th>
			<th>
				keadaan
			</th>
		</tr>
		<tr>
			<th>
				susu
			</th>
			<th>
				13
			</th>
			<th>
				13/11/2017
			</th>
			<th>
				beracun
			</th>
			<th>
				bekas
			</th>
		</tr>
<?php foreach ($data as $barang) ?>
<tr>
	<td>
		<?php echo $barang['nama_barang'];?>
	</td>
	<td>
		<?php echo $barang['jumlah_barang'];?>
	</td>
	<td>
		<?php echo $barang['tgl_masuk'];?>
	</td>
	<td>
		<?php echo $barang['keadaan'];?>
	</td>
</tr>
<?php endforeach;?>
	</table>

</body>
</html>