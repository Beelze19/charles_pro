<?php
require 'function.php';
if ( isset($_POST["register"])) {
    if( Registrasi($_POST) > 0 ) {
        echo "<script>
        alert('User Baru Berhasil Di Tambahkan!');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Register</title>
    <link rel="stylesheet" href="LOGIN.css">
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>

    <section>   
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                <h2>REGISTER</h2>
                <div class="inputbox">
                    <input type="text" name="username" required>
                    <label for="">Username </label>
                </div>
                <div class="inputbox">
                    <input type="Password" name="password" required>
                    <label for="">Password  </label>
                </div>
                  <div class="inputbox"><div>
                 <label for="password2"></label>
                <input type="password" name="password2" id="password2" placeholder="Confirm Password" required>
                </div>
                
                </div>
            <button type="submit" name="register">REGISTER</button>
            <button type="submit"><a href="login.php">  BACK   </a></button>
            </form>
                
            </div>
        </div>
    </section>

</body>
</html>