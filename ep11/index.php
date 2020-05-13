<?php
    //karna koneksi di functions.php, maka file ini butuh functions.php
    require 'functions.php';
    $movie = query("SELECT * FROM movietab");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
</head>

<body>

    <h1>Movie Lists</h1>
    <a href="tambahdata.php">Tambah Data</a>
    <br>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Poster</th>
            <th>Judul</th>
            <th>IMDb Rating</th>
            <th>Tahun</th>
            <th>Genre</th>
            <th>Director</th>
            <th>Animasi</th>
        </tr>

        <!-- loop tampilin semua data tiap kolom dari tabel movietab dlm var result -->
        <!-- karna yg mau ditampilin itu loop array, jd pake foreach -->
        <?php $i = 1; ?>
        <?php foreach ($movie as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?idmovie=<?= $row["idmovie"]; ?>">Ubah</a> | <a href="hapus.php?idmovie=<?= $row["idmovie"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
                </td>
                <td><img src="poster/<?= $row["poster"]; ?>" width="50"></td>
                <td><?= $row["judul"]; ?></td>
                <td><?= $row["imdb_rating"]; ?></td>
                <td><?= $row["tahun"]; ?></td>
                <td><?= $row["genre"]; ?></td>
                <td><?= $row["director"]; ?></td>
                <td><?= $row["animasi"] ? "Yes" : "No"; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>
