<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Halaman Registerasi</title>
    </head>
    <style>
        label {
            display: block;
        }
    </style>

    <body>
        
        <h1>Registerasi Akun</h1>

        <form method="post" action="">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password : </label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="registerasi">Daftar!</button>
            </li>

        </form>
    </body>
</html>