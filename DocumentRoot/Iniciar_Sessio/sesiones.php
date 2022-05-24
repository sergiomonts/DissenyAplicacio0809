<?php

class UserSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentUser($user){
        $_SESSION['mail'] = $user;
    }

    public function getCurrentUser(){
        return $_SESSION['mail'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}


?>
