<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST.v2 var Superglobals</title>
</head>
<body>
    <!-- isset ngecek kalo tombol submit udh diklik belum, kalo belum jgn print halo -->
    <!-- if, tombol submit udah dipencet, maka tampilkan "Halo _nama_, Selamat datang!". -->
    <?php if( isset($_POST["submit"])) : ?>
        <h1>Halo <?= $_POST["nama"]; ?>, Selamat Datang!</h1>
    <?php endif; ?>

    <!-- bikin supaya namanya ditampilin di halaman ini aja -->
    <form action="" method="POST"> <!-- action"_kosong_" tandanya data nama di bawah dikirimkan hanya ke halaman ini. -->
        Input Nama: 
            <input type="text" name="nama">
            <br>
            <button type="submit" name="submit">Go!</button>
    </form>

</body>
</html>