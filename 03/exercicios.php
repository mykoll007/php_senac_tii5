<?php
    // 1 - Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.
    // 2 - Crie um array contendo meses do ano. Altere o valor do último elemento para Onzembro"
    //3 - Crie um array vazio. Adicione os números de 1 a 5 no array. Depois, adicione o número 6 ao final do array"
    //4 - Utilize um loop foreach para percorrer o array de meses do ano e exibir cada um.
    //5 - Conte quantos elementos o array de dias de semana possui.
    //6 - Utilize a função array_serach() para econtrar a posicao do dia "Sábado" no array e exiba o resultado.

//1
echo "1* Atividade:  ";
$diasdasemana = [ "segunda-feira", "terça-feira", "quarta-feira","quinta-feira", "sexta-feira", "sabado", "domingo"];
echo "O terceiro dia da semana é: " . $diasdasemana[2];

echo "<br>";
echo "<hr>";

// 2
echo "2* Atividade: ";
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
$meses[11] = "Onzembro";
echo "O último mês do ano é " . $meses[11];

echo "<br>";
echo "<hr>";

// 3 
echo "3* Atividade: ";
$numeros [] = "1" . "2". "3". "4" ."5";
print_r($numeros);
$numeros [0] = "6";
echo "<br>";
print_r ($numeros);

echo "<br>";
echo "<hr>";

// 4
echo "4* Atividade: ";
foreach($meses as $mes){
    echo $mes . " " ;
}
echo "<br>";
echo "<hr>";

// 5
echo "5* Atividade: ";
echo "Dias da semana: " . count($diasdasemana);

echo "<br>";
echo "<hr>";

// 6
echo "6* Atividade: ";
echo " Posição do 'Sabado': " . array_search("sabado", $diasdasemana);

echo "<hr>";
?>