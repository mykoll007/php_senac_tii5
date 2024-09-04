<?php

class DatabaseRepository{
    private static $dsn = 'mysql:host=localhost;dbname=lista_compras';
    private static $username = 'root';
    private static $password = '';

    public static function connect() {
        try {
            $pdo = new PDO(self::$dsn, self::$username, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Falha de Conexao: ' . $e->getMessage();
            exit;
        }
    }
    
    public static function getAllProducts() {
        $pdo = self::connect();
        $sql = "SELECT * FROM itens_compra";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);        
    }
    public static function getProductsById($id) {
        $pdo = self::connect();
        $sql = "SELECT * FROM itens_compra WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function insertProducts($nome_produto, $quantidade) {
        $pdo = self::connect();
        $sql = "INSERT INTO itens_compra (nome_produto, quantidade) 
                VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$nome_produto, $quantidade]);
    }
    public static function updateProducts($id, $nome_produto, $quantidade)
    {
        $pdo = self::connect();

        
        $sql = "UPDATE itens_compra SET nome_produto = :nome_produto, quantidade = :quantidade WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['id' => $id, 'nome_produto' => $nome_produto, 'quantidade' => $quantidade]);
    }
    public static function deleteProducts($id)
    {
        $pdo = self::connect();
        $sql = "DELETE FROM itens_compra WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
    public static function buyProducts($id){
        $pdo = self::connect();

        $sql = "UPDATE itens_compra SET comprado = comprado + 1 , quantidade = quantidade -1 WHERE id = :id AND quantidade > 0";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['id'=> $id]);
    }

}


?>