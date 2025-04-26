<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="trait.css">
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = (int)$_POST['nombre'];
}
?>

<body>
    <table border="1">
       <tr><th colspan= "10"><?php echo "Table de multiplication ( $nombre x )"; ?></th></tr> 
        <?php
        for ($i = 1; $i <= $nombre; $i++): ?>
            <tr>
                
                    <?php for ($k = 1; $k <= 10; $k++): ?>
                        <td> <?php echo "$i" . 'x' . $k . '=' . $k * $i; ?></td>
                    <?php endfor ?>
                
            </tr>
        <?php endfor ?>
    </table>
</body>

</html>