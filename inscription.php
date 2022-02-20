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
    <title>Inscription</title>
</head>
<body>
   <form method="POST" action="">
       <fieldset>
           <legend>Informations Personnelles</legend>
           <label for="nom">Nom: </label>
           <input type="text" name="nom" id="nom"><br>
           <label for="prenom">Prenom: </label>
           <input type="text" name="prenom" id="prenom"><br>
           <label for="email">Email: </label>
           <input type="email" name="email" id="email"><br>
           <label for="mdp">Mot de passe:</label>
           <input type="password" name="mot_de_passe1" id="mdp"><br>
           <label for="mdp2">Confirmer:</label>
           <input type="password" name="mot_de_passe2" id="mdp"><br>
           <input type="submit" value="Envoyer">
           
           

       </fieldset>
       

   </form>
    
</body>
</html>