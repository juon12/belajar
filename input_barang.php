<?php
if(isset($_POST['kirim'])){

	include "koneksi.php";

	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
	$jenis = $_POST['jenis'];
	$keadaan = $_POST['keadaan'];

	//echo $nama.", ".$jumlah.", ".$jenis.", "."$keadaan";
	$sql = "INSERT INTO barang(nama_barang, jumlah_barang, id_jenis, keadaan_barang) VALUES ('$nama','$jumlah','$jenis','$keadaan')";
	$data = mysqli_query($koneksi, $sql);
	if($data){
		echo "Barang Berhasil Disimpan<br>";
	}else{
		echo "Barang gagal disimpan";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inventory Input</title>
</head>
<body>
	<form method="POST">
		<label>Nama Barang :</label>
		<input type="text" name="nama"><br>
		<label>Jumlah Barang :</label>
		<input type="number" name="jumlah"><br>
		<label>Jenis Barang :</label>
		<select name="jenis">
			<option value="1">Berbahaya</option>
			<option value="2">Mudah Pecah</option>
			<option value="3">Beracun</option>
		</select><br>
		<label>Keadaan Barang :</label>
		<select name="keadaan">
			<option value="baru">Baru</option>
			<option value="bekas">Bekas</option>
		</select><br>
		<input type="submit" name="kirim" value="submit">

	</form>

</body>
</html>