<?php
require_once 'DatabaseRepository.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    $comprado = $_POST['comprado'];
    DatabaseRepository::insertProducts($nome_produto, $quantidade, $comprado);
    header('Location: list_products.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produtos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Adicionar Produtos</h1>

    <form action="add_produto.php" method="post">
        <label for="nome_produto">Nome do Produto:</label>
        <input type="text" name="nome_produto" id="nome_produto" required>
        <br>
        <label for="quantidade">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" required>
        <br>
        <label for="comprado">Comprado:</label>
        <input type="text" name="comprado" id="comprado" required>
        <br>
        
        <button type="submit">Adicionar</button>
    </form>

    <a href="list_products.php">Voltar para a lista de produtos</a>
</body>
</html>
