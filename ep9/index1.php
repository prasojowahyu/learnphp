<?php
//koneksi ke db mysql, sekalian bikin var
$dbconn = mysqli_connect("localhost", "root", "", $database = 'phpdb');

//get data dari tabel db ==> query
$result = mysqli_query($dbconn, "SELECT * FROM movietab");

//^^^ hanya nampilin data keseluruhan, harus ambil objek dlm tabel.
//ambil datanya (fetch) data film dari $result
//mysqli_fetch_row(); => nampilin array numerik, yg indexnya angka
//mysqli_fetch_assoc(); => nampilin array asosiatif, indexnya string/namanya
//mysqli_fetch_array(); => nampilin array general, bisa angka, bisa string. tapi yg ditampilin datanya dobel
//mysqli_fetch_object(); => nampilin objeknya.

//var result dipack lg supaya bisa diambil objeknya.
// $mov = mysqli_fetch_assoc($result);
// //coba tampilkan isinya
//     var_dump($mov);

// //nunjukin setiap objek dlm tabel movietab. (loop)
// while ($mov = mysqli_fetch_assoc($result)) {
//     var_dump($mov["judul"]);
// }

?>
<!-- List udah bisa konek ke database -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
</head>

<body>
    <h1>Movie Lists</h1>
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
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> || <a href="">Hapus</a>
                </td>
                <td><img src="poster/<?= $row["poster"]; ?>"" width=" 50"></td>
                <td><?= $row["judul"]; ?></td>
                <td><?= $row["imdb_rating"]; ?></td>
                <td><?= $row["tahun"]; ?></td>
                <td><?= $row["genre"]; ?></td>
                <td><?= $row["director"]; ?></td>
                <td><?= $row["animasi"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>