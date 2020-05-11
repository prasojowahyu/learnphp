<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST var Superglobals</title>
</head>
<body>
    
    <!-- bedanya ada di url nya, kalo get ada value keliatan di url -->
    <form action="form1.php" method="GET">
        Input Nama: 
            <input type="text" name="nama">
            <br>
            <button type="submit" name="submit">Go!</button>
    </form>
    <br>
    <form action="form1.php" method="POST">
        Input Nama: 
            <input type="text" name="nama">
            <br>
            <button type="submit" name="submit">Go!</button>
    </form>


</body>
</html>