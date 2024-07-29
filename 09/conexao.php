<?php
// DatabaseStringName = dsn
$dsn = 'mysql:host=localhost;dbname=lista_compras';
$user = 'usuario_lista_compras';
$password = 'Senha@123';

try{
// https://www.php.net/manual/en/pdo.connections.php
$dbh = new PDO($dsn, $user, $password);
echo "Conexão com banco de dados com sucesso!";
}
catch(PDOException $e){
    echo "Erro ao se conectar com o banco! ";
    echo  $e;
}
?>