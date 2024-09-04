<?php
require_once 'DatabaseRepository.php';

$id = $_GET['id'];
DatabaseRepository::buyProducts($id);
header('Location: list_products.php');
exit;

?>