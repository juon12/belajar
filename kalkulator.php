<!DOCTYPE html>
<html>
<head>
	<title>COBA</title>
</head>
<body>
<form method="POST">
	<input type="int" name="a1"><br>
	<input type="int" name="a2">
	<select name="cal">
		<option value="tambah">tambah</option>
		<option value="kurang">kurang</option>
		<option value="bagi">bagi</option>
		<option value="kali">kali</option>
	</select>
	<input type="submit" name="kirim" value="kirim">

</form>
<?php
if ( isset ($_POST ["kirim"])){
	$a1 = ($_POST["a1"]);
	$a2 = ($_POST["a2"]);

	$cal = $_POST['cal'];
	if ($cal == "tambah"){
		$hasil = $a1 + $a2 ;
	}elseif ($cal == "kurang"){
		$hasil = $a1 - $a2 ;
	}
	elseif ($cal == "bagi"){
		$hasil = $a1 / $a2 ;
	}
	elseif ($cal == "kali"){
		$hasil = $a1 * $a2 ;
	}
	echo "$hasil";
}
?>
</body>
</html>