<?php 
	//nerapin array ke data mhs
	//ini array numerik. kelemahan elemennya ga spesifik.
	$mahasiswa = [
		["Jojo Wahyu", "4112316025", "Staterkom", "081361626164"],
		["Jojo Jarjit", "4112317025", "Staterkom", "081361626222"],
		["Boboi Golem", "4112318025", "T.I", "082261626234"]
	];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 	<h1>Data Mahasiswa</h1>
 	
 	<?php foreach( $mahasiswa as $mhs ) : ?>
 	<ul>
 		<li>Nama : <?= $mhs[0]; ?></li>
 		<li>NIM : <?= $mhs[1]; ?></li>
 		<li>Prodi : <?= $mhs[2]; ?></li>
 		<li>HP : <?= $mhs[3]; ?></li>
 	</ul>
	<?php endforeach; ?>


 </body>
 </html>