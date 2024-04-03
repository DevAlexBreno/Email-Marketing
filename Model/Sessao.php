<?php

class Sessao{
    private $usuario;


    public function startSession($usuario){
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('Location: /View/admin.php');
        
    }

    public function destroySession(){
        session_start();
        session_destroy();
        header('Location: index.php');
        exit;
    }

    function setUsuario($_setUsuario){
        $this->usuario = $_setUsuario;
    }
    function getUsuario(){
        return $this->usuario;
    }
}
