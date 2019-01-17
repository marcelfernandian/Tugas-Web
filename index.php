
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:Home.php'); }
   require_once("koneksi.php");
?>
	<br/>
	<br/>
	<center><h2>LOGIN</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="proseslogin.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
 

</html>
