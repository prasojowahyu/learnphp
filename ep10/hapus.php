<?php 
    require 'functions.php';

    //konekin ke halaman index
    $idmov = $_GET["idmovie"];
    if ( hapus($idmov) > 0) {
            echo "
                <script>
                    alert('data berhasil dihapus.');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal dihapus.');
                    document.location.href = 'index.php';
                </script>
            ";
        }
?>