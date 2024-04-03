<?php
session_start();
require_once 'Sessao.php';
require_once 'Config.php';

$query = $pdo->query("SELECT * FROM clientes");
$clientes = $query->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Clientes</title>
</head>
<body>
    <a href="admin.php">Voltar</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente):?>
                <tr>
                    <td><?php echo $cliente['id'];?></td>
                    <td><?php echo $cliente['nome'];?></td>
                    <td><?php echo $cliente['email'];?></td>
                    <td><?php echo $cliente['nascimento'];?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>