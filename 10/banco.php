<?php
$dsn = "mysql:host=localhost;dbname=lista_compras";
$username = "root";
$password = "";
//Função para conectar ao banco de dados
function connect(){
    try{
        global $dsn, $username, $password;
       $pdo = new PDO($dsn, $username, $password);

       return $pdo;
    } catch(PDOException $e){
        echo "Falha na conexao: " . $e->getMessage();
        exit;
    }
    
    
}

//Função para obter todos os itens (Read)
function getAllItems(){
    $pdo = connect();
    $sql = "SELECT * FROM itens_compra";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

//Função para adicionar um novo item (Create)
function addItem($nome_produto, $quantidade){
    $pdo = connect();
    $sql = "INSERT INTO itens_compra (nome_produto, quantidade) VALUES (:nome_produto, :quantidade)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute(['nome_produto' => $nome_produto, 'quantidade' => $quantidade]); 
}

//Função para atualizar um item (Update)
function updateItem($id, $comprado){

}

//Função para excluir um item (Delete)
function deleteItem($id){
    $pdo = connect();
    $sql = "DELETE FROM itens_compra WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute(['id' => $id]); 
}
?>