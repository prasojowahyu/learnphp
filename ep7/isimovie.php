<?php 
//ngecek apakah tidak ada data di $_GET
//cek kalo ada org yg coba hack lewat url
    if (!isset($_GET["judul"]) ||
        !isset($_GET["imdb"]) ||
        !isset($_GET["tahun"]) ||
        !isset($_GET["director"]) ||
        !isset($_GET["genre"]) ||
        !isset($_GET["animasi"]) ||
        !isset($_GET["poster"]) ||) {
        //redirect ke
        header("Location: request_get.php");
        exit; //exit biar script selanjutnya ga dijalankan
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Movienya</title>
</head>
<body>
    <ul>
        <li><img src="poster/<?= $_GET["poster"]; ?>"></li>
        <li>Judul : <?= $_GET["judul"]; ?></li>
        <li>IMDb Rating : <?= $_GET["imdb"]; ?></li>
        <li>Tahun : <?= $_GET["tahun"]; ?></li>
        <li>Genre : <?= $_GET["genre"]; ?></li>
        <li>Director : <?= $_GET["director"]; ?></li>
        <li>Animasi : <?= $_GET["animasi"]; ?></li>
    </ul>

    <a href="request_get.php">Back to title</a>
</body>
</html>