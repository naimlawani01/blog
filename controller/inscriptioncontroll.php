<?php
    if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['mdp1']) and isset($_POST['mdp2'])){
        $nom=trim(htmlspecialchars($_POST['nom']));
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $mdp1=$_POST['mdp1'];
        $mdp2=$_POST['mdp2'];
        if($mdp1==$mdp2)
        {
            if(strlen($mdp1)>=7){

                $user_exist= $db->prepare('SELECT * FROM users WHERE email= ? ');

                $user_exist->execute([
                    $email
                ]);

                $user = $user_exist->fetchAll();
                if(count($user)>0){
                    echo "Cette adresse mail est deja utilisée";
                }else{

                    $mdp =sha1($mdp1);
                    $insertion = $db->prepare('INSERT INTO users (nom, prenom, email,mot_de_passe) VALUES (?,?,?,?)');
                    $insertion->execute(array($nom, $prenom, $email,$mdp));
                    header('location: connexion.php');
                }

            }else{
                $error = "Votre mot de passe est trop court(<7)";
            }

        }else{
            $error = "Les deux(2) mots de passes ne sont pas identiques";
        }

    }