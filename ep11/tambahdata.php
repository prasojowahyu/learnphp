<?php
    
    require 'functions.php';

    //submit check
    if ( isset($_POST["submit"])) {
        if ( tambahdata($_POST) > 0) {
            echo "
                <script>
                    alert('data gagal ditambah.');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data berhasil ditambah.');
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
    <title>Tambah data Moviee</title>
</head>
<body>
    <h1>Tambah data Movie</h1>
    <form method="post" action="">
        <ul>
            <li>
                <label for="judul">Judul:</label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="imdb_rating">IMDB Rating:</label>
                <input type="text" name="imdb_rating" id="imdb_rating" required>
            </li>
            <li>
                <label for="tahun">Tahun:</label>
                <input type="text" name="tahun" id="tahun" required>
            </li>
            <li>
                <label for="genre">Genre:</label>
                <input type="text" name="genre" id="genre" required>
            </li>
            <li>
                <label for="director">Director:</label>
                <input type="text" name="director" id="director" required>
            </li>
            <li>
                <label for="animasi">Animasi: </label>
                <input type="radio" name="animasi" id="animasi" value="1" checked="checked">Ya
                <input type="radio" name="animasi" id="animasi" value="0">Tidak
            </li>
            <li>
                <label for="poster">Poster </label>
                <input type="text" name="poster" id="poster">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Kirim!</button>
            </li>
        </ul>
    </form>
</body>
</html>

