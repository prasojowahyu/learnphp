<?php
    
    //koneksi ke db mysql buat index.php, sekalian bikin var
    $dbconn = mysqli_connect("localhost", "root", "", "phpdb");

    //bikin fn query=> dari index.php(ngambil data dari db phpdb)
    function query($query) {
        //bikin supaya $dbconn dibaca di fn ini
        global $dbconn;
        $result = mysqli_query( $dbconn, $query );
        //bikin array kosong penampung
        $rows = [];
        //sisipkan data dari $result ke rows (dari isi tabel ke array baru)
        while ( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row; //artinya masukin tiap data(row) ke array row(s)
        }
        return $rows;
    }

?>