<?php
require('database.php');
   //verifie si les champs sont saisis

    if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['mot_de_passe1']) and isset($_POST['mot_de_passe2']))
    {
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $mdp1=$_POST['mot_de_passe1'];
        $mdp2=$_POST['mot_de_passe2'];
        if($mdp1==$mdp2)
        {
            $mdp =sha1($mdp1);
            $insertion = $db->prepare('INSERT INTO users (nom, prenom, email,mot_de_passe) VALUES (?,?,?,?)');
            $insertion->execute(array($nom, $prenom, $email,$mdp));

        }
        else
        {
            echo "Les deux(2) mots de passes ne sont pas identiques";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100&display=swap" rel="stylesheet">

</head>
<body>
    <form action="" class="formu1">
        <h1>Register</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eaque blanditiis non repudiandae totam magnam autem quae eum unde, nihil tenetur dicta voluptate tempore dolorem natus consectetur asperiores! Ab, quasi?</p>
        <div class="boite1">
            <div class="gauche">
                <label for="prenom">First Name</label><br>
                <input type="text" name="prenom" id="prenom" placeholder="e.g John">
            </div>
            <div class="droite">
                <label for="nom">Last Name</label><br>
                <input type="text" name="nom" id="nom" placeholder="e.g Smith">
            </div>

        </div>
        <div class="boite2">
            <div class="milieu">
                <label for="email">Email Adress</label><br>
                <input class="email" type="text" id="email" name="email" placeholder="e.g john@your-domain.com">
            </div>
        </div>
        <div class="boite3">
            <div class="gauche">
                <label for="numero">Phone Number</label><br>
                <input type="text" name="prenom" id="numero" placeholder="+00 0000 000 0000">
            </div>
            <div class="droite">
                <label for="siteweb">Website</label><br>
                <input type="text" name="site" id="siteweb" placeholder="e.g https://google.com">
            </div>
        </div>
        <div class="boite4">
            <div class="gauche">
                <label for="mdp1">Password</label><br>
                <input type="password" name="mdp1" id="mdp1" placeholder="Your Password">
            </div>
            <div class="droite">
                <label for="mdp2">Retype Password</label><br>
                <input type="password" name="mdp2" id="mdp2" placeholder="Your Password">
            </div>
        </div>
        <input type="submit" value="Enregister" name="envoyer">
    </form>
    
    
    
</body>
</html>