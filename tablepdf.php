<?php 
	require 'function.php';

	$art = query("SELECT * FROM artikel");

	if(isset($_POST["cari"])){
		$art = cari($_POST['keyword']);
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>pdf</title>
 	<style type="text/css">
 		th{
 			background-color: #dedede;
 			color: #333333;
 			font-weight: bold;
 		}
 		table{
 			width: 100%;
 		}
 	</style>
 </head>
 <body>

 	<table border="3" cellpadding="3" cellpadding="2">
 		<tr>
 			<th>NO</th>
 			<th>Judul</th>
 			<th>Artikel</th>
 			<th>Gambar</th>
 		</tr>
 		<?php $i=1; ?>
 		<?php foreach($art as $row) : ?>
 			<tr>
 				<td><?php echo $i; ?></td>
 				<td><?php echo $row['judul']; ?></td>
 				<td><?php echo $row['Artikel']; ?></td>
 				<td><img src="imgs/<?php echo $row ['Gambar']; ?>" width="170px" height="120px"></td>
 			</tr>
 			<?php $i++; ?>
 		<?php endforeach; ?>
 	</table>
 
 </body>
 </html>