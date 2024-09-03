<?php
require_once 'DatabaseRepository.php';

$id = $_GET['id'];
DatabaseRepository::deleteProducts($id);
header('Location: list_products.php');
exit;

?>