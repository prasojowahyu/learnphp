<?php 
	function greet($name = "Admin", $time = "Datang") {
		return "Selamat $time, $name";
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latian Fn</title>
 </head>
 <body>
 	<!-- param default -->
 	<h1><?= greet(); ?></h1>
 	<!-- nentuin param sendiri -->
 	<h1><?= greet("Jojo", "pagi"); ?></h1>
 </body>
 </html>