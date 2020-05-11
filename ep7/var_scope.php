<?php 
    //variabel scope-lingkupnya tidak se luas var global
    $x = 10;

    function tampilX() {
        $x = 20;            //var ini hanya tampil dalam fn tampilX
        echo $x;
    }

    tampilX();
    echo "<br>";
    echo $x;                //var ini tampil terlepas dari fn
?>