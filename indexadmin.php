	

<?php 

	session_start();

	require 'function.php';

	$art = query("SELECT * FROM artikel");

    if(!isset($_SESSION["login"])){
    header("Location:login.php");

    exit;		
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximal-scale=1, user-scalable=no">
	<title>PROJECT</title>
	<link rel="stylesheet" type="text/css" href="indexAdminis.css">
	<link rel="stylesheet" type="text/css" href="responsives.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

	<div class="open">
		<div class="open-hubungi">Hubungi kami: 0812-1231-6343</div>
		<div class="open-sosmed">
			<img src="imgs/R.png" width="30px" height="20px">
			<img src="imgs/j.png" width="30px" height="20px">
			<img src="imgs/wa.png" width="30px" height="20px">
		</div>
	</div>
	<nav>
		
	<div class="header">
		<div class="header-logo">Sekolah Membantu
			<p>PAKET A | PAKET B | PAKET C | HOMESCHOOLING</p>
		</div>
		<div class="header-list">
		<ul>
			<li><a href="../../coba/index.php">UJIAN ONLINE |  </a></li>
			 
			<li><a href="../../angga/indexcoba.php">DAFTAR ONLINE |  </a></li>
			 
			
			<li><a href="index1.php">PERPUSTAKAAN |  </a></li>
			<li><a href="logout.php">LOG OUT |   </a></li>

			
			

		</ul>
		 </div>
		 <div class="menu-toggle">
			<input type="checkbox" />
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	</nav>
	<div class="body"><div></div>
		<div class="body-paragraf">PENDIDIKAN MEMBANTU
		<p>PENDIDIKAN :PAKET A | PAKET B | PAKET C | HOMESCHOOLING</p> 
		
			<button><a href="../../angga/indexcoba.php">DAFTAR ONLINE </a></button>
		</div>
	</div>

	<div class="inspirasi">
		<div class="inspirasi-text">Inspirasi Hari ini<br>
		<br>
			<p>"Pendidikan adalah senjata paling mematikan di dunia, karena dengan <br> pendidikan, Anda dapat mengubah dunia" - Nelson Mandela</p>
		</div>
		<div class="inspirasi-gambar"><img src="imgs/nelson.jpg" width="430px" height="200px"></div>
	</div>
<div aria-hidden="true" id="wh-spacing-86651" class="wh-spacing-wrapper " style="height:200px"></div>

	<div class="learnings">
		<div class="learning-text"><p>E-Learning PKBM Dharma Putra Mandiri</p>
				<button><a href="../../angga/indexcoba.php">DAFTAR ONLINE </a></button>
		<img src="imgs/a.jpg" class="rounded-pill" alt="" width="900px" height="400px" >
			</div>
	</div>
<div aria-hidden="true" id="wh-spacing-86651" class="wh-spacing-wrapper " style="height:50px"></div>

<div class="test-text"><h1>Artikel</h1></div>

<div aria-hidden="true" id="wh-spacing-86651" class="wh-spacing-wrapper " style="height:100px"></div>

 <form action="" method="POST">
 	<input type="submit" name="html" value="Tampilkan Data artikel"/>
 	<input type="submit" name="pdf" value="Download PDF"/>
 </form>
 <?php 
 	if(isset($_POST['html'])){
 		header("location:tablepdf.php");
 	}
 	if(isset($_POST['pdf'])){
 		header("location:pdf.php");
 	}
  ?>

  <?php if(isset($_SESSION["admin"])) : ?>
		<a href="tambah.php">TAMBAH DATA ARTIKEL</a>
	<?php endif; ?>
<table border="2" cellpadding="9" cellspacing="0">
	
	<?php $i= 1; ?>
		<?php  foreach($art as $row) : ?>
		<tr>
			<td><?php echo 	$i; ?></td>
			<td><img src="imgs/<?php echo $row["Gambar"]; ?>" width="170px" height="120px"></td>
			<td><?php echo $row ["judul"]; ?></td>
			<td><?php echo $row  ["Artikel"]; ?></td>
        <td>
        	<?php if(isset($_SESSION["admin"])) : ?>
            <button>
            	<a href="ubah.php?id=<?php echo $row ["id"]; ?>">Ubah</a>
            </button>

            <button>
            	<a href="hapus.php?id=<?php echo $row ["id"]; ?>">hapus</a>
            </button>

       		<?php endif; ?>
        </td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
	</table>


<div aria-hidden="true" id="wh-spacing-86651" class="wh-spacing-wrapper " style="height:100px"></div>
<div class="logo">
	<div aria-hidden="true" id="wh-spacing-86651" class="wh-spacing-wrapper " style="height:10px"></div>
	<div class="logo-gambar"><a href="https://maps.app.goo.gl/gSK64c4gYnRBcLj19"><img src="imgs/location.png" width="40px" height="30px"></a><br>lubuk-baja/jalan-teratai 2/batam.</div>
	<div class="logo-gambars"><a href="https://www.google.com/gmail/about/"><img src="imgs/mail.png" width="40px" height="30px"></a><br>Charlesgtg15@gmail.com</div>
 </div>
 
<div class="footer">
	<div class="belajar-online">BELAJAR ONLINE <br><a href="#"><img src="imgs/elearning.jpg" width="170px" height="80px"></a></div>
	<div class="kerja-sama">KERJA SAMA <br><a href="#"><img src="imgs/kerjasama-footer.jpg" width="170px" height="80px"></a></div>
	<div class="ujian-online">UJIAN ONLINE <br><a href="#"><img src="imgs/ujian-online.jpg" width="170px" height="80px"></a></div>
	<div class="fomulir-pendaftaran">UNDUH FORMULIR <br><a href="#"><img src="imgs/fomulir-pendaftaran.jpg" width="170px" height="80px"></a>
</div>
<div class="fomulir-pendaftaran">PERPUSTAKAAN <br><a href="#"><img src="imgs/perpustakaan.jpg" width="170px" height="80px"></a></div>
<div class="fomulir-pendaftaran">CEK NISN <br><a href="#"><img src="imgs/nisn.jpg" width="170px" height="80px"></a></div>
<div class="fomulir-pendaftaran">DAFTAR ONLINE <br><a href="#"><img src="imgs/daftar-online.jpg" width="170px" height="80px"></a></div>
<div class="fomulir-pendaftaran">KEMDIKBUD <br><a href="#"><img src="imgs/kemdikbud.jpg" width="170px" height="80px"></a></div>
<div aria-hidden="true" id="wh-spacing-86651" class="wh-spacing-wrapper " style="height:400px"></div>
<div class="footer-text">PKBM Dharma Putra Mandiri</div>
<hr/>
<div class="footer-texts"><a href="#">Sekolah membantu</a>  dipersembahkan oleh Charles Jonathan</div>

 <script src="menu.js"></script>
 
</body>
</html>