<!DOCTYPE html> // misahin html script dari php. endfor
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>latihan loop for</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i <= 3; $i++ ) : ?>
                <tr>
                    <?php for( $j = 1; $j <=5; $j++ ) : ?>
                        <td><?php echo "$i, $j"; ?></td>
                    <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>
</body>
</html>