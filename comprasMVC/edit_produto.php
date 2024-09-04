<?php
require_once 'DatabaseRepository.php';
$id = $_GET['id'];
$product = DatabaseRepository::getProductsById($id);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome_produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    DatabaseRepository::updateProducts($id, $nome_produto, $quantidade);
    header('Location: list_products.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>

    <form action="edit_produto.php?id=<?= $product['id'];?>" method="post">
        <label for="nome_produto">Nome Produto:</label>
        <input type="text" name="nome_produto" id="nome_produto" value="<?= $product['nome_produto'];?>"  required>
        <br>
        <label for="quantidade">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" value="<?= $product['quantidade'];?>" required>
        <br>
        
        
        <button type="submit">Editar</button>
    </form>

    <a href="list_products.php">Voltar para a lista de produtos</a>
</body>
</html>