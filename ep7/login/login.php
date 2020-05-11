<?php 
//di awal harus cek apakah tombol submit udh ditekan apa belum.
if ( isset($_POST["kirim"]) ) {
    //cek kebenaran username&pwd
    if ( $_POST["user"] == "admin" && $_POST["passwd"] == "1") {
    //kalo bener, bisa masuk ke halaman admin (redirect).
        header("Location: admin.php");
        exit;
    } else {
    
    //kalo salah, tampilin notice error.
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
    <!-- nah diatas udh dibuat logic, disini bakal tampil kalo error, kecuali benar -->
    <?php if( isset($error)) : ?>
        <p style="color: crimson; font-style: italic; ">username / passwordnya salah bambank!</p>
    <?php endif; ?>

    <h1>Login dulu..</h1>
    <ul>
        <form action="" method="POST">
            <li>
                <label for="username">Username: </label>
                <input type="text" name="user" id="username">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="passwd" id="password">
            </li>
            <li>
                <button type="submit" name="kirim">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>