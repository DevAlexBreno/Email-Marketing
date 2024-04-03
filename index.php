<?php
require_once 'autoload.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['name'] == 'admin' && $_POST['senha'] == 'admin'){
        $usuario = $_POST['name'];
        $iniciarSessao = new Sessao();
        $iniciarSessao->startSession($usuario);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Marketing</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        <label for="name">Nome</label><br>
        <input type="text" name="name"><br>
        <label for="senha">Senha</label><br>
        <input type="password" name="senha"><br><br>
        <input type="submit" name="submit">
    </form>


</body>
</html>