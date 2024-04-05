<?php
require_once 'autoload.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../App/View/Css/style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="name">Nome</label><br>
            <input type="text" name="name"><br>
            <label for="password">Senha</label><br>
            <input type="password"><br><br>
            <input type="submit" name="Entrar" Value="Entrar">
        </form>
    </div>
</body>
</html>