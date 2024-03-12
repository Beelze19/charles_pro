<?php 
require 'function.php';

$pem = query("SELECT * FROM pembayaran");




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>pdf</title>
 	<style type="text/css">
 		table{
 			width: 100px;
 			height: 100px;
 		}
 	</style>
 </head>
 <body>
 <table border="1">
 	<tr>
 		<th>NO</th>
 		<TH>TANGGAL PEMBAYARAN</TH>
 		<th>NOMINAL</th>
 		<TH>NISN</TH>
 		<th>GAMBAR</th>
 	</tr>
 	<?php $i=1; ?>
 	<?php foreach($pem as $row)  : ?>
 		<tr>
 			<td><?php echo $i; ?></td>
 		<td><?php  echo $row["tanggal_pembayaran"]; ?></td>
 		<td><?php  echo $row["nominal"]; ?></td>
 		<td><?php  echo $row["nisn"]; ?></td>
 		<td><img src="imgs/<?php  echo $row["gambar"]; ?>"></td>
 		</tr>
 		<?php $i++; ?>
 	<?php endforeach; ?>
 </table>
 </body>
 </html>