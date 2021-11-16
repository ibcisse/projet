<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constantes en php</title>
</head>
<body>
    <?php
    //la valeur d'une constante est ..constante(exeption : "magiques")
    //le nom des constantes est sensible a la casse
    //Par convention, on ecrit les conditions en MAJUSCULES
    //le nom d'une constante commence soit par un undescore soit par une lettre

    // define("BIENVENUE","Bienvenue sur mon site");
    // echo BIENVENUE


    //
    // $a = "Bonjour";
    // define("NOMBRE", 4);

    // function portee()
    // {
    //     echo $a;
    //     echo NOMBRE;

    //     echo "<br>";
        
    //     $b = 34;
    //     echo $b;
    // }
    // portee();
    echo __LINE__. '<br>'; // permet de montrer la ligne

    function test()
    {
        echo __FUNCTION__ .'<br>';// le de la function qu'il est appelle
    }
    test();
    echo __FILE__.'<br>';//chemain complet jusqu'au fichier
    echo __LINE__.'<br>';//le nom dans le quel contenant le fichier
    echo __LINE__.'<br>';// permet de montrer la ligne
    ?>
</body>
</html>