<?php 
    require 'functions.php';

    //konekin ke halaman index
    if(isset($_GET["idmovie"]) ) {
        //cek keberhasilan querynya
        if ( hapus($_GET["idmovie"]) > 0) {
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
    }
?>
