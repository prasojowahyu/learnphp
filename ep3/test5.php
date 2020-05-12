<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pengkondisian di tabel</title>
    <style>
        .clr-baris{
            background-color: aqua;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
                <?php if( $i % 2 == 1 ) : ?> // kalo i dibagi 2 = 1 mk ganjil.
                    <tr class="clr-baris">
                <?php else : ?>
                    <tr>
                <?php endif; ?>
                    <?php for( $j = 1; $j <=5; $j++ ) : ?>
                        <td><?php echo "$i, $j"; ?></td>
                    <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>
</body>
</html>