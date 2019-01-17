<?php
include("konek.php");

$Kode = $_POST["kode"];
$Nama = $_POST["nama"];
$Deskripsi = $_POST["deskripsi"];
$Stock = $_POST["stok"];
$Harga = $_POST["harga"];
$berat = $_POST["berat"];



if (trim($Kode)=="") {
		echo "Kode masih kosong,mohon diisi ";
	}
elseif (trim($Nama)=="") {
		echo "nama masih kosong,mohon diisi";
	}
elseif (trim($Deskripsi)=="") {
		echo "deskripsi masih kosong,mohon diisi";
	}
elseif (trim($Stock)=="") {
		echo "stok masih kosong,mohon diisi";
	}
elseif (trim($Harga)=="") {
		echo "harga masih kosong,mohon diisi";
	}
elseif (trim($berat)=="") {
		echo "berat masih kosong,mohon diisi";
	}
else{
	$input="insert into barang (kode,nama,deskripsi,stok,harga,berat)
		values ('$Kode','$Nama','$Deskripsi','$Stock','$Harga','$berat')";
$hasil = mysql_query($input,$konek);
header ("location:Home.php?" );
}



?>

