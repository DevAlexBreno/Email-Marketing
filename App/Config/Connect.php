<?php
namespace Config;
class Connect{
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $dbname = 'emailmarketing';
    public function __construct($_host = null, $_username = null, $_password = null, $_dbname = null){
        if ($_host !== null) {
            $this->host = $_host;
        }
        if ($_username !== null) {
            $this->username = $_username;
        }
        if ($_password !== null) {
            $this->password = $_password;
        }
        if ($_dbname !== null) {
            $this->dbname = $_dbname;
        }
    }
    public function connect(){
        $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
        try{
            $pdo = new \PDO($dsn, $this->username, $this->password);

            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }catch (\PDOException $e){
            echo "Erro na conexão " . $e->getMessage();
        }
    }
}