<?php 
		
	$conn =  mysqli_connect("localhost","root","","dbsklh");

	function query($query){
		global $conn;

		$result = mysqli_query($conn, $query);

		$rows = [];

		while ($row = mysqli_fetch_assoc($result)) {

			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($post){
		global $conn;

		$Gambar = upload();

			if(!$Gambar){
				return false;
			}

		$judul = $post["judul"];
		$Artikel = $post["Artikel"];

		$query = "INSERT INTO artikel VALUES ('','$Gambar','$judul','$Artikel')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

function ubah($post){
	global $conn;
		$id = $post["id"];
		$Gambarlama = $post["Gambarlama"];

		if($_FILES['Gambar']['error']===4){
			$Gambar = $Gambarlama;
		}else{
			$Gambar = upload();
		}

		$judul = $post["judul"];
		$Artikel = $post["Artikel"];
		
		$query = "UPDATE artikel SET
					Gambar= '$Gambar',
					judul= '$judul',
					Artikel= '$Artikel'
					WHERE id= $id
					";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function upload() {
		global $conn;

		$namaFile = $_FILES['Gambar']['name'];
		$ukuranGambar = $_FILES['Gambar']['size'];
		$error = $_FILES['Gambar']['error'];
		$tmpname = $_FILES['Gambar']['tmp_name'];

		

		if ($error === 4){
			echo"
			<script>
			alert('ayo pilih gambar terlebih dahulu');
			</script>
			";
			return false;
		}

		$ekstensiGambarValid =['jpg','jpeg','png'];
		$ekstensiGambar =explode('.',$namaFile);
		$ekstensiGambar =strtolower(end($ekstensiGambarValid));

		if(!in_array ($ekstensiGambar, $ekstensiGambarValid)){
			echo"
			<script>
			alert('yang anda upload bukan gambar');
			</script>
			";
			return false;
		}
		if($ukuranGambar > 10000000){
			echo"
			<script>
			alert('gambar yang anda upload teralu besar ');
			</script>
			";
			return false;

		}

		$namaFileBaru  = uniqid();
		$namaFileBaru .='.';
		$namaFileBaru .= $ekstensiGambar;
		move_uploaded_file($tmpname, 'imgs/' .  $namaFileBaru);

		return $namaFileBaru;

	}

function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM artikel WHERE id = $id");
	return mysqli_affected_rows($conn);
}
function registrasi($data) {
        global $conn;
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // Cek Username Sudah Ada Atau Belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if( mysqli_fetch_assoc($result)) {
            echo "<script>
            alert('Username Sudah Terdaftar');
            </script>";
            return false;
        }

    if( $password !== $password2 ) {
        echo "<script>
        alert('Konfirmasi Password Tidak Sesuai!');
        </script>";
        return false;
    }
    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT); 
    // Tambahkan User Baru Ke Database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password','user')");
    return mysqli_affected_rows($conn);

    }

 ?>