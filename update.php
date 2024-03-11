<?php
require 'Function.php';

$id = $_GET["id"];

$Tandrio= query("SELECT * FROM tb_member WHERE id =$id")[0];

if (isset($_POST["submit"])){
	if( update ($_POST) > 0){
		echo"
		<script>
			alert('Data Berhasil di Update');
			document.location.href = 'Tandrio.php';
		</script>
		";

	}else{
		echo"
		<script>
			alert('Data Gagal di Update');
			document.location.href = 'Tandrio.php';
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
	<title>Update</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $Tandrio ["id"];?>">
		
		<ul>
			<h1>Update member</h1>
			<li>
				<label for ="nama">nama : </label>
				<br>
				<input type="text" name="nama" id="nama" required value = "<?php echo $Tandrio["nama"]; ?>">
			</li>
			<li>
				<label for="alamat">alamat : </label>
				<br>
				<input type="text" name="alamat" id="alamat" required value = "<?php echo $Tandrio["alamat"];?>">
			</li>
			<li>
				<label for ="jenis_kelamin">jenis kelamin : </label>
				<br>
				<input type="text" name="jenis_kelamin" id="jenis_kelamin" required value = "<?php echo $Tandrio["jenis_kelamin"];?>">
			</li>
			<li>
				<label for ="tlp">tlp : </label>
				<br>
				<input type="text" name="tlp" id="tlp" required value = "<?php echo $Tandrio["tlp"];?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah member</button>
			</li>
			<a href="Tandrio.php">Kembali</a>
			
		</ul>
	
	</form>
</body>
</html>