<?php 	

require 'function.php';

if (isset($_POST["submit"] ) ){
	if(tambah($_POST) > 0 ){
		echo"
		<script>
		alert('data berhasil di tambahkan');
		document.location.href='indexadmin.php';
		</script>
		";
	}else{
			echo"
		<script>
		alert('data gagal di tambahkan');
		document.location.href='indexadmin.php';
		</script>
		";
	}
}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tambah data artikel</title>
	<link rel="stylesheet" type="text/css"  href="tmbh.css">
		
</head>
<body>
	
	<form action="" method="post" enctype="multipart/form-data">
	
	<ul class ="test">
	<fieldset>
		<legend><h1 align="center">Tambah data Artikel</h1></legend>	
		<li>
			<label for="Gambar">Gambar: </label><br>
			<input type="file" name="Gambar" id="Gambar" required >
		</li>
		<br>
		<li>
			<label for = "judul">judul  :</label><br>
			<input type="text" name="judul" id="judul" required placeholder="judul">
		</li>
		<br>
		<li>
			<label for="Artikel">Artikel         : </label><br>
			<input type="text" name="Artikel" id="Artikel" required placeholder="Artikel">
		</li>
		
		
	<br>
		<li>
			<button type="submit" name="submit">Submit</button>
		</li>
	</ul>
</fieldset>
</form>


</body>
</html>