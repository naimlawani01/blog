<?php
    function isConnected(){
    

        if(isset($_SESSION['userid']) && $_SESSION['userid'] != null){
            return true;
        }else{
            return false;
        }
    }
    function getUser($userId, $db){
        $stmt = $db->prepare('SELECT * FROM  users WHERE id= :userId');
        $stmt->execute([
            'userId' => $userId,
        ]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }