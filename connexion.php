<?php
    session_start();
    require('database.php');
    require('function.php');
    require_once('controller/connexioncontroll.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
    <?php require_once('header.php'); ?>
    
    <form action="" method="POST" class="formu1">

        <h1>Connexion</h1>
        <?php if(isset($error)):?>
            <p style="color: red;">
                <?= $error ?>
            </p>
        <?php endif;?>

        <div class="boite2">
            <div class="milieu">
                <label for="email">Email</label><br>
                <input class="email" type="text" id="email" name="email" placeholder="e.g john@your-domain.com" require>
            </div>
        </div>
        <div class="boite4">
            <div class="gauche">
                <label for="mdp">Password</label><br>
                <input type="password" name="mdp" id="mdp" placeholder="Your Password" require>
            </div>
            <div class="droite">

                <input class="envoyer" type="submit" value="Enregister" name="envoyer" require>
            </div>
        </div>
    </form>
    
    <?php require_once('footer.php'); ?> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>

