<!-- <?php 
    // $hari = array("Senin", "Selasa", "Rabu");
    // $bulan = ["Januari", "Februari", "Maret"];
    // $arr1 = [100, "text", true];
    // //nampilin array
    // //versi debugging, developer mau liat isi array
    // var_dump($hari);
    // echo "<br><br>";
    // print_r($bulan);

    // //menampilkan 1 elemen
    // echo $arr1[0];
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Array Accociation</title>
    <style> .kotak {
        width: 50px;
        height: 50px;
        background-color: #bada55;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
        transition: 1s;
    }
    .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }
    .clear {
        clear: both;
    }
    </style>
</head>
<body>
    <?php $angka = [
        [1,2,3], //[0],[1],[2]
        [4,5,6], //[0],[1],[2]
        [7,8,9]  //[0],[1],[2]
        ];
    ?>
    <!-- <?php foreach( $angka as $a ) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?> -->

    <!-- mencetak 1 elemen (arr multidimensi) -->
    <?php foreach( $angka as $a ) : ?>
        <?php foreach( $a as $b) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>
</html>