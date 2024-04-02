<?php
session_start();
require_once 'Sessao.php';
include_once 'Cadastrar.php';
include_once 'Config.php';

if(isset($_SESSION['usuario'])){
    echo "<h1>iae " . $_SESSION['usuario'] . "</h1>";

}else{
    header('Location: index.php');
}

if(isset($_POST['cadastrar'])){
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $nascimento = $_POST['date'];

    $cadastrar = new Cadastrar($pdo);
    $cadastrar->cadastrar($nome, $email, $nascimento);
}
if(isset($_POST['sair'])){
    $sair = new Sessao();
    $sair->destroySession();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do Admin</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <input type="submit" name="sair" value="sair">
        <h2>Cadastrar Clientes(LEADS)</h2>
        <label for="name">Nome</label><br>
        <input type="text" name="name"><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" placeholder="exemplo@email.com"><br>
        <label for="date">Data de Nascimento</label><br>
        <input type="date" name="date"><br><br>
        <input type="submit" name="cadastrar" value="Cadastrar Cliente">
    </form>

</body>
</html>