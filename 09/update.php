<?php
$dsn = "mysql:host=localhost;dbname=lista_compras";
$usuario = "root";
$password = "";

try{
    $pdo = new PDO($dsn,$usuario,$password);

    $sql = "UPDATE itens_compra SET comprado = :comprado WHERE id = :id ";

    $stmt = $pdo->prepare($sql);

    $stmt->execute(['comprado' => true, 'id' => 4]);

    echo "Item atualizado com sucesso!";


} catch(PDOEXCEPTION $e){
    echo "Falha na conexão" . $e->getMessage();
    exit;
}


?>