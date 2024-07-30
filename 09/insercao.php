<?php
$dsn = 'mysql:host=localhost;dbname=lista_compras';
$user = 'usuario_lista_compras';
$password = 'Senha@123';

try {
    $pdo = new PDO($dsn, $user, $password);

    $sql = "INSERT INTO itens_compra (id,nome_produto,quantidade) VALUES (:id ,:nome_produto , :quantidade)";
    //preparar escrevendo o sql dele
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ 'nome_produto' => 'Salgadinho', 'quantidade' => 4, 'id' => 3]);

    echo "Item inserido com sucesso!";



} catch (PDOException $e) {
    echo 'Falha na conexão: ' . $e->getMessage();
}
?>