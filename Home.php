<html>
	<head>
		<title>Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="11.css"/>
	</head>
		<body>
	<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
		 <h3><div class= "jdl">KELOLA DATA BARANG</div></h3>
		 <br>
		 <br>
		 
		 <table width= 80% height= 5% align="center">
			<tr>
			   <td><b>Data Barang</b></td>
			   <td><p align="right"><a href="input.php"><Button class ="btn">Tambah</Button></a>
			</tr>
		</table>
		<br>
		
		<table width= 80% height= 40% align= "center" border = 1 cellpadding= 0 cellspacing= 0>
			<tr align= "center">
				<td>Kode</td>
				<td>Nama</td>
				<td>Harga</td>
				<td>Aksi</td>
			</tr>
			
			
		<?php 
			//koneksi ke database
			include("konek.php");
			//mengambil data dari tabel barang
			$tampil = mysql_query("select * from barang");
			while ($data = mysql_fetch_array($tampil)){
				
		?>
		
		<tr align = "center">
			<td><?php echo $data ['kode']; ?> </td>
			<td><?php echo $data ['nama']; ?> </td>
			<td><?php echo $data ['harga']; ?> </td>
			<td class = "eh"><a href="edit.php?no=<?php echo $data['id'];?>" class="link">Edit</a>|
			<a href="hapus.php?id=<?php echo $data['id'];?>" class="link1">Hapus</a></td>
			
			
		</tr>
		
	
	<?php
			}
		?>
			
			<table width= 80% height= 5% align="center">
			<br>
			<td><p align="right"><a href="logout.php"><Button class ="btn">LOGOUT</Button></a>
			</br>
	
	
	</table>
			
	</table>
	</body>
	</html>
			