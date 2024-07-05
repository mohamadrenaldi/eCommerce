<!DOCTYPE HTML>
<html>
	<head>
		<title>PHP</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body class="contact">
		<div class="php">
		<?php 
		if(isset($_POST['spn']))
		{
			$nama=$_POST['nm'];
			$alamat=$_POST['alamat'];
			$email=$_POST['email'];
			$Komentar=$_POST['kom'];
			echo"Nama Anda 		: <b>$nama</b><br>";
			echo"Alamat Anda 	: <b>$alamat</b><br>";
			echo"Komentar Anda  : <b>$Komentar</b><br>";
			echo"Email Anda  	: <b>$email</b><br>";
		}
		?>
		</div>
	</body>
</html>