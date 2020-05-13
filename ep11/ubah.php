<?php

require 'functions.php';
//ambil data dari url index.php
$idmovie = $_GET["idmovie"];

//query data movie berdasarkan idnya
$mov = query("SELECT * FROM movietab WHERE idmovie = $idmovie")[0]; //[0] berarti setelah panggil fn query begitu masuk ke array $rows, langsung cari row ke 0.

//submit check
if (isset($_POST["submit"])) {

    //cek data udh ditambah blm
    if (ubahdata($_POST) > 0) {
        echo "
                <script>
                    alert('data gagal diubah.');
                    document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('data berhasil diubah.');
                    document.location.href = 'index.php';
                </script>
            ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update data Moviee</title>
</head>

<body>
    <h1>Update data Movie</h1>
    <form method="post" action="">
        <ul>
            <li>
                <label for="judul">Judul:</label>
                <input type="text" name="judul" id="judul" value="<?= $mov["judul"]; ?>" required>
            </li>
            <li>
                <label for="imdb_rating">IMDB Rating:</label>
                <input type="text" name="imdb_rating" id="imdb_rating" value="<?= $mov["imdb_rating"]; ?>" required>
            </li>
            <li>
                <label for="tahun">Tahun:</label>
                <input type="text" name="tahun" id="tahun" value="<?= $mov["tahun"]; ?>" required>
            </li>
            <li>
                <label for=" genre">Genre:</label>
                <input type="text" name="genre" id="genre" value="<?= $mov["genre"]; ?>" required>
            </li>
            <li>
                <label for=" director">Director:</label>
                <input type="text" name="director" id="director" value="<?= $mov["director"]; ?>" required>
            </li>
            <li>
                <label for="animasi" value="<?= $mov["animasi"]; ?>">Animasi: </label>
                <input type=" radio" name="animasi" id="animasi" value="1" checked="checked">Ya
                <input type="radio" name="animasi" id="animasi" value="0">Tidak
            </li>
            <li>
                <label for="poster">Poster </label>
                <input type="text" name="poster" id="poster" value="<?= $mov["director"]; ?>">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Ubah data!</button>
            </li>
        </ul>
    </form>
</body>

</html>