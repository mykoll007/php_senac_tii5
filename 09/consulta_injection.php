<?php
// DatabaseStringName = dsn
$dsn = 'mysql:host=localhost;dbname=teste';
$user = 'root';
$password = '';

try{
// https://www.php.net/manual/en/pdo.connections.php
$dbh = new PDO($dsn, $user, $password);
//Atribuir para caso precise caso nao apareça a mensagem que deu errado e especificado
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM teste.pessoa WHERE nome = :pessoa";

//preparar escrevendo o sql dele
$stmt = $dbh->prepare($sql);

//executando
$stmt->execute(['pessoa' => 'mykoll']);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($result);
echo '</pre>'; 
}
catch(PDOException $e){
    echo "Erro ao se conectar com o banco! ";
    echo  $e;
    exit;
}
?>