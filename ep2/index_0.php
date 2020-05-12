<?php
    // ep2 yt php web programming unpas ctrl+/ aktivasi&deaktivasi komentar
    echo "Wahyu Prasojo"; //standard penampil ke layar
    print "Belajar PHP"; //print sama kaya echo
    echo 1239; //angka ga perlu petik
    echo true; //boolean 1/0(kosong)
    echo "Hari Jum'at"; //petik 2 buat kalo didalemnya ada petik 1
    print '===============================================HTML===============================================';
    //------------------------------------------------
    //penulisan sintaks php
    //1.php dalem html
    //2.html dalem php
    // shortcut html !+Tab
    

?>
//1.php dalem html
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Belajar PHP</title>
    </head>
    <body>
        <h1>Halo, Selamat datang <?php echo "Jojo"; ?></h1>
        <p1><?php echo "ini paragraf pertama"; ?></p>
        
    </body>
</html>
//2.html dalem PHP
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
        echo "Selamat datang php dalem HTML";
    ?>
</body>
</html>