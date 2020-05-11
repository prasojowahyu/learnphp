<?php 
    //array assosiatif
    //definisinya sama numerik, kecuali
    //key-nya adalah string yg kita buat sendiri
    $mahasiswa =[
        [ //[0]
                "nama" => "Kampret Beriman", 
                "nim" => "4112316025",
                "prodi" => "Staterkom",
                "hp" => "081361626164",
                "img" => "Kampret Beriman.jpg" 
        ],
        [ //[1]
                "nama" => "Bangsat Biadab", 
                "nim" => "4112316024",
                "prodi" => "Staterkom",
                "hp" => "081361620897",
                "img" => "Bangsat Biadab.jpg"
        ],
        [ //[2]
                "nama" => "Asu jancok", 
                "nim" => "4112316142",
                "prodi" => "Staterkom",
                "hp" => "081361214232",
                "img" => "Asu Jancok.jpg"
        ]
            ];
?>

<!DOCTYPE html>
<html> <head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	
	<?php foreach( $mahasiswa as $mhs ) : ?>
	<ul>
        <li>
            <img src="img/<?= $mhs["img"]; ?>">
        </li>
		<li>Nama : <?= $mhs["nama"]; ?></li>
		<li>NIM : <?= $mhs["nim"]; ?></li>
		<li>Prodi : <?= $mhs["prodi"]; ?></li>
        <li>HP : <?= $mhs["hp"]; ?></li>
	</ul>
	<?php endforeach; ?>
</body>
</html>