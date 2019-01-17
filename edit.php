<html>
	<head>
		<title>KELOLA DATA BARANG</title>
		<link rel="stylesheet" href="11.css" type="text/css">
	</head>
	<body>
	<H2 class="jdl"> KELOLA DATA BARANG </H2>
	
	<?php 
	include("konek.php");
	$no = $_GET['no'];
	$query_mysql = mysql_query("SELECT * FROM barang where id='$no'") or die(mysql_error());
	//$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	
		<form action="update.php" method="post" p align="center">
		<table width=40% height=10%  border="0" cellpadding="0" cellspacing="0" p align="center">
			<tr>
				<td><b> Edit data Barang </b></td>
			</tr>
			</table>
		<table width=40% height=40% border="0" cellpadding="0" cellspacing="0" p align="center">
		<tr>
			<td width=20%> Kode : </td>
			<td><input class="t" type="text" name="kode" readonly value="<?php echo $data['kode'] ?>"></td>
		</tr>
		<tr>
			<td>Nama : </td>
			<td><input class="t" type="text" name="nama" value="<?php echo $data ['nama'] ?>"></td>
		</tr>
		<tr>
			<td>Deskripsi : </td>
			<td><input class="t" type="text" name="deskripsi" value="<?php echo $data ['deskripsi'] ?>"></td>
		</tr>
		<tr>
			<td>Stok </td>
			<td><input class="t" type="text" name="stok" value="<?php echo $data ['stok'] ?>"></td>
		</tr>
		<tr>
			<td>Harga : </td>
			<td><input class="t" type="text" name="harga" value="<?php echo $data ['harga'] ?>"></td>
		</tr>
		<tr>
			<td>Berat : </td>
			<td><input class="t" type="text" name="berat" value="<?php echo $data ['berat'] ?>"></td>
		</tr>
		<tr>
			<td colspan="2" p align="center" height=10%> <input class="btn" type=submit value="simpan"></td>
		</tr>
	</form>
	<?php
		}
	?>
</body>
</html>
		
	