<?php
if(isset($_POST['envoyer']))
{

    $email = trim(htmlspecialchars($_POST['email']));
    $password = sha1(htmlspecialchars($_POST['mdp']));
    if(!empty($email) and !empty($password)){
        $checkSql = $db->prepare('SELECT *FROM  users WHERE email= :email and mot_de_passe= :mdp ');
        $checkSql->execute([
            'email' => $email,
            'mdp' => $password
        ]);
        $data = $checkSql->fetch();
        if($data){
            $_SESSION['userid']= $data['id'];
            header('location: index.php');
        }else{
            $error = "Non d'utilisateur ou mot de passe incorect";
        }

    }else{
        $error = "Certains champs sont vides";
    }
}

?>