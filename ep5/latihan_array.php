<?php 
	//loop pada array
	//for, foreach
	$angka = [3,2,15,20,11,77,89];

 ?>
 <!-- //for -->
 <!DOCTYPE html>
 <html>
 <head>
 	<title>loop array</title>
 	<style>
 		.kotak {
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 			font-size: 18px;
 		}
 		.clear { clear: both; }
 	></style>
 </head>
 <body>
 	<?php for ($i=0; $i < count($angka); $i++) { ?> <!-- pake count() supaya ga ngukur berapa banyak elemen -->
 		<div class="kotak"><?php echo $angka[$i]; ?></div>
 	<?php } ?>
 
 	<div class="clear"></div> <!-- buat pemisah atas bawah -->

 	<!-- foreach -->
 	<?php foreach ($angka as $a ) { ?>
 		<div class="kotak"><?php echo $a; ?></div>
 	<?php } ?>

 	<div class="clear"></div>
 	<!-- untuk sintaks ringkas -->
 	<?php foreach ($angka as $a ) : ?>
 		<div class="kotak"><?= $a; ?></div> <!-- ?= == php echo -->
 	<?php endforeach; ?>


 </body>
 </html>