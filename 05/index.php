<?php

//Estruturas de repetição em php

// Exemplo 1: FOR
echo "Exemplo 1: FOR <br>";
// for(COMEÇA A CONTAGEM | ENQUANTO NÃO FOR ISSO | FAÇA DE TANTO EM TANTO);
 for($i = 20; $i < 50 ; $i = $i + 5){
    echo "Número $i <br>";
 }
echo "<br>";

//Exemplo 2: WHILE
echo "Exemplo 2: WHILE <br>";
$contador = 1;

while($contador <= 5){
    echo "Número $contador <br>";
    // $contador = $contador + 2 ;
    // ou
    $contador++;
}
echo "<br>";

//Exemplo 3: DO-WHILE

echo "Exemplo 3: DO-WHILE <br>";
$cont_do = 1;

do{
    echo "Numero $cont_do <br>";
    $cont_do++;
} while($cont_do <= 5);

echo "<hr>";

$cliente_deseja = true;

do{
    echo "Numero adicionar um produto ao carrinho? <br>";
        $cliente_deseja = false;
    // $cliente_deseja = true;
    // if($cliente_deseja){
    //     adicionarProdutoaoCarrinho();
    // }
} while($cliente_deseja);

echo "<br>";

//Lógica de adição em JavaScript como carrinho 
// $produtosTotal = 0;
// function adicionarProdutoaoCarrinho(){
//     $produtosTotal++;
// }

//Exemplo 4: FOREACH
echo "Exemplo 4: FOREACH <br>";
    $array_vogais = ["a","e","i","o","u"];

    foreach($array_vogais as $vogal){   // Não é tão flexivel pois não da para contar de 
        echo "Vogal: $vogal <br>";
    }

    for ($i = 0; <= count($array_vogais) ; $i++){
        echo "Vogal:" $vogal "<br>";
    }
?>