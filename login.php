<?php 	
session_start();
require 'function.php';

	if(isset($_SESSION["login"])){
		header("Location:indexadmin.php");
	}

if(isset($_POST["login"])){

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");

$cek = mysqli_num_rows($result);

if($cek > 0 ){

	$row = mysqli_fetch_assoc($result);

	if(password_verify($password, $row["password"])){
		$_SESSION["login"] = true;
		if($row['role']=="admin"){

		$_SESSION['admin'] = true;
		$_SESSION['role'] = 'admin';
		header("location:indexadmin.php");
	} else if ($row['role']=="user"){
		$_SESSION['user'] = true;
		$_SESSION['role'] ='user';
		header("location:indexadmin.php");
	}else{
		echo "	<script>
					alert('Password Salah!');
					document.location.href = 'login.php';
				<script>";
	}
}
	 
} else {
		echo "	<script>
					alert('Username Salah!!');
					document.location.href = 'login.php';
				<script>";
	}
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    
	<section>	
		<div class="form-box">
			<div class="form-value">
				<form action="" method="post" enctype="multipart/from-data">
				<h2>Login</h2>
				<div class="inputbox">
					<input type="text" name="username" required>
					<label for="">Username </label>
				</div>
				<div class="inputbox">
					<input type="Password" name="password" required>
					<label for="">Password  </label>
				</div>
				<div class="forget">
					<label for=""> <input type="checkbox">Remember me  <a href="#">forget password</a></label>
					
				</div>
  		 	<button type="submit" name="login">Log In</button>
			</form>
				<div class="register">
					<p>Don't have a account <a href="register.php">Register</a></p>
				</div>
			</div>
		</div>
	</section>

</body>
</html>