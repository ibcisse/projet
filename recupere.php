<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recupere</title>
</head>
<body>
    <p>
       <mark> BONJOUR ACCESS !<br></mark>
    <?php       
        echo ' Mon Prenom est: '.$_POST[ 'validationDefault01' ];
        echo '<br>'.' Mon nom est: '.$_POST[ 'validationDefault02' ];       
        echo '<br>'.' Mon adresse Email est: '.$_POST[ 'colFormLabelSm' ];

        require_once 'db.php';
        $req = $pdo->prepare("INSERT INTO users SET usernames = ?, password = ?, email = ?");
        ?>
        <br><marquee behavior="" direction="">je suis DEVELOPPEUR WEB / MOBILE a ESTEL</marquee> </p>
    <P>
        Retour au formulaire ?
    Clique <a href="tableau.php"> ici </a></p>

</body>
</html>


