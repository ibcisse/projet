<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonction relatives a la  date</title>
</head>
<body>
<?php
// creation dune date en francais methode basic
echo 'Nous sommes le' .date("d/m/Y"). '<br>';
echo 'Aujourd\'hui c\'est '.date("l").'<br>';
echo 'Il est'.date("H:i:s").'<br>';
echo date("d-m-Y", 1000000).'<br>';
// creation dune date en francais methode  avec les tableaux
$jour = array(
    "" ,
    "lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
    "Dimanchedi");
// les mois
$mois = array(
    "" ,
    "janvier",
    "fevrier",
    "mars",
    "avril",
    "mais",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "decembre");
    //la fonction a instruire
    $datefr = $jour[date("N")]. ' ' .date("d"). ' ' . $mois[date("n")]. ' ' .date("Y");
    echo 'nous sommes le'.' ' .$datefr. '<br>';
    
    // creation dune date en francais methode setlocale avec date est heures
    setlocale(LC_TIME, 'FR_fr');
    echo 'Nous sommes le'.' ' .strftime("%A %d %B %Y"). '<br>';
    echo 'il est actuellement'.' ' .strftime("%H %M %S"). '<br>';

    // validation dune date avec la methode checkdate
    $date1 = checkdate(12,31,2014);
    $date2 = checkdate(13,31,2014);
    $date3 = checkdate(12,24,-100);
    if ($date1) {
         echo "la date est valide ! <br>";
    }else {
        echo "la date n'est valide ! <br>";
    }
    if ($date2) {
        echo "la date est valide ! <br>";
   }else {
       echo "la date n'est valide ! <br>";
   }
   if ($date3) {
    echo "la date est valide ! <br>";
}else {
   echo "la date n'est valide ! <br>";
}

// recuperation dune date sous forme de tableau avec la methode getdate
echo "<pre>";
print_r(getdate());
echo "</pre>";

echo "<br>";

echo "<pre>";
print_r(getdate(1));
echo "</pre>";

    ?>  
</body>
</html>

