<?php
include 'banco.php';

$todos_itens = getAllItems();
echo "<pre>";
print_r($todos_itens);
echo "</pre>";

if(addItem("Paçoca", 10)) {
    echo "Adição do item deu certo";
}
//deleteItem(5);
//updateItem(3, true);
//updateQuantidadeItem(3, 30);
?>

