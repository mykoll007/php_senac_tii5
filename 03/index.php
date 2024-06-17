<?php
$frutas = array("Maçã", "Banana" , "Laranja", "Morango");
print_r( $frutas);

echo "<br>";

$numeros = [2,5,6,9];
print_r($numeros);

echo "<br>";

$alunos = array("Joao" => 18, "Maria" => 20, "Pedro" => 19);
print_r($alunos);
echo "<br>";

//Acessando elementos de um array
echo "A segunda fruta é: " . $frutas[1] . "<br>";
echo "O terceiro numero é :" . $numeros[2] . "<br>" ;
echo "A idade de João é: " . $alunos["Joao"] . " anos <br>";

// Alterando elementos de um array
$frutas[0] = "Pêra";
print_r($frutas);
echo "<br>";

$numeros[5] = 100;
print_r($numeros);
echo "<br>";


$alunos ["Maria"] = 21;
print_r($alunos);
?>