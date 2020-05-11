<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST var</title>
</head>
<body>
    <!-- bedanya ada di url nya, kalo get ada value keliatan di url -->
    <h1>Selamat Datang, <?= $_GET["nama"]; ?></h1>
    <br>
    <h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
</body>
</html>