<?php 
	// date buat nampilin tanggal dg format tertentu
	echo date("l, D-M-Y");
	echo "<br>";

	//time
	echo date("d M Y", time()-60*60*24*365);
	echo "<br>";

	//mktime, bikin detik sendiri
	//	   jam, menit, detik, bulan, tangal, tahun
	echo date("l M Y", mktime(0,0,0,7,12,1998));
	echo "<br>";

	//strtotime
	echo date("l", strtotime("17 aug 1945"));
	echo "<br>";
	
?>