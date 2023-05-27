<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  
    if($pageName === "accueil"){
        echo "Accueil - Nejeu Vision";
    } else {
        echo "Nejeu Vision";
    }
    ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <a href="contact.php" class="call-to-action">CONTACTEZ-MOI</a>
    <header class="flex column">
        <div class="contact">
            <p>Contactez-moi <a href="#">ici</a> !</p>
        </div>
    </header>
    <nav class="flex row">
        <img class="logo" src="./assets/images/LOGO.svg" alt="">
        <ul class="flex">
            <li><a class="<?= $pageName === "accueil" ? 'active' : '' ?>" href="index.php">ACCUEIL</a></li>
            <li><a href="#">SE MONTRER</a></li>
            <li><a href="#">SE VENDRE</a></li>
            <li><a href="#">RÉFÉRENCES</a></li>
        </ul>
    </nav>