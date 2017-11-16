<?php
include 'koneksi.php';
if (isset($_POST['submit'])){
	$nama= $_POST ['nama'];
	$jumlah= $_POST ['jumlah'];

	$jenis=  $_POST ['jenis'];
	$keadaan=$_POST ['keadaan'];
	
//echo $nama.", ".$jumlah.",".$jenis.",".$keadaan."." value
	$sql= "inse"
$_POST = mysqli_connect($koneksi,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST">
	<label>nama barang</label>
	<input type="text" name="nama"><br>
	<label>jumlah barang</label>
	<input type="number" name="jumlah"><br>
	<label>jenis barang</label><br>
	<select>
		<option value="1">berbahya</option>
		<option value="2">mudah pecah</option>
		<option value="3">beracun</option>
	</select>


	<label>keadaan</label><br>
	<select name="keadaan">
		<option value="baru">baru</option>
		<option value="bekas">bekas</option>
		
	</select><br>
	<input type="submit" name="submit" value="simpan">
</form>
</body>
</html>