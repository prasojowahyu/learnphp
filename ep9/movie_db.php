<?php 
    $moviedb =[
        [
            "judul" => "Parasite",
            "imdb rating" => 8.6,
            "tahun" => 2019,
            "genre" => "Drama",
            "director" => "Bong Joon Ho",
            "animasi" => false,
            "poster" => "parasite.jpg"
        ],
        [
            "judul" => "Joker",
            "imdb rating" => 8.5,
            "tahun" => 2019,
            "genre" => "Crime",
            "director" => "Todd Philips",
            "animasi" => false,
            "poster" => "joker.jpg"
        ],
        [
            "judul" => "1917",
            "imdb rating" => 8.3,
            "tahun" => 2019,
            "genre" => "War",
            "director" => "Sam Mendes",
            "animasi" => false,
            "poster" => "1917.jpg"
        ],
        [
            "judul" => "Up",
            "imdb rating" => 8.2,
            "tahun" => 2009,
            "genre" => "Adventure",
            "director" => "Pete Docter",
            "animasi" => true,
            "poster" => "up.jpg"
        ],
        [
            "judul" => "Spider-Man: ItSV",
            "imdb rating" => 8.4,
            "tahun" => 2018,
            "genre" => "Action",
            "director" => "Bob Persichetti",
            "animasi" => true,
            "poster" => "spider.jpg"
        ],
        [
            "judul" => "The Shawshank Redemption",
            "imdb rating" => 9.3,
            "tahun" => 1994,
            "genre" => "Drama",
            "director" => "Frank Darabont",
            "animasi" => false,
            "poster" => "shawshank.jpg"
        ],
        [
            "judul" => "How To Train Your Dragon",
            "imdb rating" => 8.1,
            "tahun" => 2010,
            "genre" => "Action",
            "director" => "Dean DeBlois",
            "animasi" => true,
            "poster" => "traindragon.jpg"
        ],
        [
            "judul" => "Monsters, Inc.",
            "imdb rating" => 8.0,
            "tahun" => 2001,
            "genre" => "Comedy",
            "director" => "Pete Docter",
            "animasi" => true,
            "poster" => "monsters.jpg"
        ],
        [
            "judul" => "Inception",
            "imdb rating" => 8.8,
            "tahun" => 2010,
            "genre" => "Sci-Fi",
            "director" => "Christopher Nolan",
            "animasi" => false,
            "poster" => "inception.jpg"
        ],
        [
            "judul" => "Incredibles 2",
            "imdb rating" => 7.6,
            "tahun" => 2018,
            "genre" => "Action",
            "director" => "Brad Bird",
            "animasi" => true,
            "poster" => "incredibles2.jpg"
        ]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pahe.u</title>
    <style>
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <h1>Movie Database</h1>
    <ul>
        <?php foreach($moviedb as $movie) : ?>
            <img src="poster/<?= $movie["poster"]; ?> ">
            <li>Judul : <?= $movie["judul"]; ?></li>
            <li>IMDb : <?= $movie["imdb rating"]; ?></li>
            <li>Tahun : <?= $movie["tahun"]; ?></li>
            <li>Genre : <?= $movie["genre"]; ?></li>
            <li>Director : <?= $movie["director"]; ?></li>
            <li>Animasi : <?= $movie["animasi"]; ?></li>
            <div class="clear"></div>
            <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>