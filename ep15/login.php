<?php 
    require 'functions.php';

    //cek tombol login ditekan atau belum
    if ( isset($_POST["login"]) ) {
        
        $username   = $_POST["username"];
        $password   = $_POST["password"];

        $result = mysqli_query( $dbconn, "SELECT * FROM users
                                WHERE username = '$username'"
                    );
        
        //cek username tersedia ga di db
        if ( mysqli_num_rows( $result ) === 1 ) {
            //cek passwordnya
            $row    = mysqli_fetch_assoc( $result );
            //resolve passwornya
            if ( password_verify( $password, $row["password"]) ) {
                //kalo password bener, alihkan ke index
                header("Location: index.php");
                exit;
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<style>
    label {
        display: block;
    }
</style>

<body>
    <h1>Halaman Login</h1>

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
            <button type="submit" name="login">Login!</button>
        </li>
    </form>
    <p>Belum punya akun? <a href="regist.php">klik disini</a></p>
</body>

</html>