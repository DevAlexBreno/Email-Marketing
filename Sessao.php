<?php

class Sessao{
    private $usuario;


    public function startSession($usuario){
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('Location: admin.php');
        
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
// session_start();
// if(isset($_POST['sair'])){
//     if(isset($_SESSION['usuario'])){
//         session_destroy();
//         header("Location: index.php");
//         exit;
//     }
// }