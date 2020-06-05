<?php 
    require 'functions.php';

    //cek tombol daftar, kalo ditekan, jalankan ini
    if ( isset($_POST["register"]) ) {
        if ( registrasi($_POST) > 0 ) {
            echo    "<script>
                        alert('User baru berhasil ditambahkan!');
                    </script>";
        } else {
            echo mysqli_error($dbconn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Halaman Registrasi</title>
    </head>
    <style>
        label {
            display: block;
        }
    </style>

    <body>
        
        <h1>Registrasi Akun</h1>

        <form method="post" action="">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password : </label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Daftar!</button>
            </li>
        </form>
        <br>
        Udah punya akun? <a href="login.php">Klik Disini</a>
    </body>
</html>