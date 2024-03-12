<!DOCTYPE html>
<html>
<head>
	<title>dfsd</title>
</head>
<style type="text/css">
	p{
		font-size: 100px;
	}
</style>		
<body>

<div>
<P>RIO LOVE FEBIANA</P>	

<form action="" method="post">
	
	<input type="submit" name="tablepdf" value="tampilkan data customer">
		<input type="submit" name="pdf" value="download data customer">
</form>
<?php 
	if(isset($_POST['tablepdf'])){
			header("location:tablepdf.php");
	}
 ?>

 <?php 
	if(isset($_POST['pdf'])){
			header("location:pdf.php");
	}
 ?>

<button><a href="logout.php">button</a></button>
</div>
</body>
</html>