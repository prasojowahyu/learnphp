<?php
    //koneksi ke db mysql buat index.php, sekalian bikin var
    $dbconn = mysqli_connect("localhost", "root", "", "phpdb");

    //bikin fn query=> dari index.php(ngambil data dari db phpdb)
    function query($query) {
        //bikin supaya $dbconn dibaca di fn ini
        global $dbconn;
        $result = mysqli_query($dbconn, $query);
        //bikin array kosong penampung
        $rows = [];
        //sisipkan data dari $result ke rows (dari isi tabel ke array baru)
        while ( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row; //artinya masukin tiap data(row) ke array row(s)
        }
        return $rows;
    }

    function tambahdata($data) {
        global $dbconn; //selalu pake var global supaya bisa masuk ke fn
        //capture data dari form
        $judul = htmlspecialchars($data["judul"]);
        $imdb_rating = htmlspecialchars($data["imdb_rating"]);
        $tahun = htmlspecialchars($data["tahun"]);
        $genre = htmlspecialchars($data["genre"]);
        $director = htmlspecialchars($data["director"]);
        $animasi = htmlspecialchars($data["animasi"]);
        $poster = htmlspecialchars($data["poster"]);
        //query insert data
        $query = "INSERT INTO movietab
                        VALUES
                        ('', '$judul', '$imdb_rating', '$tahun', '$genre', '$director', '$animasi', '$poster')
                        ";
        mysqli_query($dbconn, $query);
        return mysqli_affected_rows($dbconn);
    }

    function hapus($idmovie) {
        global $dbconn;
        mysqli_query($dbconn, "DELETE FROM movietab WHERE idmovie = $idmovie");
        return mysqli_affected_rows($dbconn);
    }

    function ubahdata($data) {
        global $dbconn;

        //capture data dari form
        $idmovie = $data["idmovie"];
        $judul = htmlspecialchars($data["judul"]);
        $imdb_rating = htmlspecialchars($data["imdb_rating"]);
        $tahun = htmlspecialchars($data["tahun"]);
        $genre = htmlspecialchars($data["genre"]);
        $director = htmlspecialchars($data["director"]);
        $animasi = htmlspecialchars($data["animasi"]);
        $poster = htmlspecialchars($data["poster"]);

        //query insert data
        $query = "UPDATE movietab SET
                    judul = '$judul',
                    imdb_rating = '$imdb_rating',
                    tahun = '$tahun',
                    genre = '$genre',
                    director = '$director',
                    animasi = '$animasi',
                    poster = '$poster'
                    WHERE idmovie = $idmovie
                ";
        mysqli_query($dbconn, $query);
        return mysqli_affected_rows($dbconn);
    }

    function cari($keyword) {                       //wildcard mysql
        $query = "SELECT * FROM movietab
                    WHERE judul LIKE '%$keyword%' OR
                            imdb_rating LIKE '%$keyword%' OR
                            tahun LIKE '%$keyword%' OR
                            genre LIKE '%$keyword%' OR
                            director LIKE '%$keyword%' OR
                            animasi LIKE '%$keyword%' OR
                    ";
        return query($query);
    }

?>
