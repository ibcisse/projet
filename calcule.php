<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les variables en PhP</title>
</head>
<body>
    <?php 
    $nombre1 = 5;
    $nombre2 = 3;

    $addition = $nombre1 + $nombre2;
    $soutraction = $nombre1 - $nombre2;
    $multiplication = $nombre1 * $nombre2;
    $divition = $nombre1 / $nombre2;
    $modulo = $nombre1 % $nombre2;

    echo 'Addition : ' .$addition.'<br>';
    echo 'soutraction : ' .$addition.'<br>';
    echo 'multiplication : ' .$addition.'<br>';
    echo 'divition  : ' .$addition.'<br>';
    echo 'modulo  : ' .$addition.'<br>';
    echo $nombre1.' + ' .$nombre2.'<br>';
    
    $addition = 20;
    $soutraction = $soutraction - $soutraction;
    $multiplication = $addition;

    echo 'Nouvelle valeur addition :' .$addition.'<br>';
    echo 'Nouvelle valeur soutraction :' .$soutraction.'<br>';
    echo 'Nouvelle valeur multiplication :' .$multiplication.'<br>';
    ?>
</body>
</html>