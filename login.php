<?php 
session_start();
require 'function.php';

if(isset($_SESSION["login"])){
	header("Location:index.php");
}
if(isset($_POST["login"])){
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	$cek = mysqli_num_rows($result);

	if($cek > 0 ){
		$row = mysqli_fetch_assoc($result);

		if(password_verify($password, $row["password"])){
			$_SESSION["login"] = true;

			if($row["role"]=="admin"){
				$_SESSION["admin"]=true;
				$_SESSION["role"]="admin";
				header("Location:indexpetugas.php");
			}else if($row["role"]=="user"){
				$_SESSION["user"]=true;
				$_SESSION["role"]="user";
				header("Location:index.php");
			}
		}else{
			echo "
			<script>
			alert('password anda salah ');
			document.location.href='index.php';
			</script>

			";
		}
	}else{
		echo "
			<script>
			alert('username anda salah ');
			document.location.href='index.php';
			</script>

			";
	}


}




 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>login</title>
 </head>
 <body>
 <form action="" method="post">
 	<input type="text" name="username" required>
 	<br>
 	<input type="text" name="password" required>
 	<br>
 	<input type="submit" name="login" value="login">
 	
 </form>
 </body>
 </html>