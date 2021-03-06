<?php
    session_start();
    require 'functions.php';

    //cek cookie dulu udah aktif/belum
    if (isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
        $id     = $_COOKIE['id'];
        $key    = $_COOKIE['key'];

        //ambil username berdasarkan id di db
        $result = mysqli_query( $dbconn, "SELECT username FROM users WHERE id = $id" );
        $row    = mysqli_fetch_assoc( $result );

        //cek cookie dan username
        if ($key === hash('sha256', $row['username']) ) {
            $_SESSION['login'] = true;
        }
    }

    //kalo udah login(COOKIE), ke index ga perlu login (selama cookie belum expired)
    //kalo remember me gak diceklis, tiap close session, diminta login lagi
    if (isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

    //cek tombol login ditekan atau belum
    if (isset($_POST["login"])) {

        $username   = $_POST["username"];
        $password   = $_POST["password"];

        $result = mysqli_query($dbconn, "SELECT * FROM users
                                    WHERE username = '$username'");

        //cek username tersedia ga di db
        if (mysqli_num_rows($result) === 1) {
            //cek passwordnya
            $row    = mysqli_fetch_assoc($result);
            //resolve passwornya
            if (password_verify($password, $row["password"])) {
                //set session
                $_SESSION["login"] = true; //cek ada login session, kalo gak ada lempar ke halaman login

                //cek box remember me [COOKIE]
                if( isset($_POST['remember']) ) {
                    //buat cookie nya
                    setcookie('id', $row['id'], time() + 60 );
                    setcookie('key', hash('sha256', $row['username']), time() + 60 );
                }
                //kalo password bener, alihkan ke index
                header("Location: index.php");
                exit;
            }
        }

        //alert kalo akun salah
        $error = true;
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<style>
    /* label {
        display: block;
    } */
</style>

<body>
    <h1>Halaman Login</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style:italic; ">Username / Password SALAH</p>
    <?php endif; ?>

    <form method="post" action="">
        <li>
            <label for="username">Username : </label>
            <br>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password : </label>
            <br>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
        </li>
        <li>
            <button type="submit" name="login">Login!</button>
        </li>
    </form>
    <p>Belum punya akun? <a href="regist.php">klik disini</a></p>
</body>

</html>