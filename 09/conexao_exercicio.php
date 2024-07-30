<?php
$dsn = 'mysql:host=localhost;dbname=teste';
$user = 'root';
$pass = '';

$dbh = new PDO($dsn, $user, $pass);

$sql ="SELECT * FROM teste.pessoa";
$stmt = $dbh->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($result);
echo '</pre>'; 
?>