<?php 
namespace Model;
use Config\Connect;
use PDO;

class UserModel extends Connect{
    private string $login; 
    private string $senha;

    public function verifyUser($_login, $_senha){
        $this->login = $_login;
        $this->senha = $_senha;

        $pdo = $this->connect();

        $stmt = $pdo->prepare("SELECT * FROM clientes WHERE nome = ? && senha = ?");
        $stmt->execute([$this->login, $this->senha]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}