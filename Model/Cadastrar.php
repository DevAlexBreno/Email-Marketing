<?php
require_once 'Config.php';

class Cadastrar{
    private $nome, $email;
    private $nascimento;
    private $pdo;

    function __construct($pdo){
        $this->pdo = $pdo;
    }


    public function cadastrar($nome, $email, $nascimento){

        $stmt = $this->pdo->prepare("INSERT INTO clientes (nome, email, nascimento) VALUES (:nome, :email, :nascimento)");

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nascimento', $nascimento);

        $stmt->execute();

        //echo "registrado com sucesso";
    }
    function setNome($_nome){
        $this->nome = $_nome;
    }
    function setEmail($_email){
        $this->email = $_email;
    }
    function setNascimento($_nascimento){
        $this->nascimento = $_nascimento;
    }
    function getNome(){
        return $this->nome;
    }
    function getEmail(){
        return $this->email;
    }
    function getNascimento(){
        return $this->nascimento;
    }
}