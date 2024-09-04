<?php
require_once 'DatabaseRepository.php';
$products = DatabaseRepository::getAllProducts();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<h1>Lista de Produtos </h1>
    <a href="add_produto.php">Adicionar Novo Produto</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Comprado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?= $product['nome_produto']; ?></td>
                    <td><?= $product['quantidade']; ?></td>
                    <td><?= $product['comprado']; ?></td>
                    <td>
                    <a href="comprar_produto.php?id=<?= $product['id']; ?>">Comprar</a>
                        <a href="edit_produto.php?id=<?= $product['id']; ?>">Editar</a>
                        <a href="delect_produto.php?id=<?= $product['id']; ?>" onclick="return confirm('Tem certeza que deseja deletar esse contato?');">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>