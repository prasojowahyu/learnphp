<?php 
	//array, variabel berbentuk matriks atau terdapat banyak nilai. elemen bisa beda tipe data
	//merupakan pasangan key dan value. yang dimulai dari 0.
	//cara lama
	$hari = array("senin", "selasa","rabu");
	//cara baru
	$bulan = ["Januari", "Februari", "Maret"];

	$arr1 = [123, "text", true]; //0,1,2

	// //nampilin array keseluruhan pake var_dump atau print_r()
	// var_dump($hari);
	// echo "<br>";
	// print_r($bulan);
	// echo "<br>";

	// //nampilin 1 elemen array pake echo
	// echo $arr1[0];
	// echo $bulan[2];

	//nambah elemen di akhir array
	var_dump($hari);
	$hari[] = "Kamis";
	$hari[] = "jumat";
	echo "<br>";
	var_dump($hari);

 ?>