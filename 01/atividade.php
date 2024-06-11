<?php
    #1
    // Crie uma variável para nome e outra para profissão
    // Escreva a mensagem "Fulano é tal_profissão"
    #2
    // Crie uma váriavel senha e armazene "senha123"
    //Verifique se a senha tem mais de 8 caracteres
    //Se sim, diga que a senha é válida. Se não, diga que é inválida
    #3
    // Corrija a palavra "ExEmPlo" para que ela fique totalmente em minúsculo

    #4
    // Corrija o link " https://exemplo.com  " para que ele não tenha espaços inválidos

    #5
    // Inverta a string "abcd123" e encontre a posição do caractere "3" após a inversão

    #1
    $nome = "Mykoll";
    $profissão = "Desenvolvedor de Sistemas";

    echo $nome . " é um " . $profissão;

    // Pular
    echo "<br>";

    #2
    $senha = "senha123";
    echo strlen($senha);

    // Pular
    echo "<br>";

    if (strlen($senha) >= 8){
        echo "Senha válida";
    } else{
        echo "Senha inválida";
    }

    // Pular
    echo "<br>";

    #3
    $texto = "ExEmplo";
    $texto_minusculo = strtolower($texto);
    echo $texto_minusculo;

    // Pular
    echo "<br>";

    #4
    $link = "  https://exemplo.com  ";
    echo strlen($link);
    echo "<br>";
    $link_sem_espaço = trim($link);
    echo strlen($link_sem_espaço);

    echo "<br>";

    #5
    $texto = "abcd123";
    $texto_invertido = strrev($texto);
    echo $texto_invertido;

    echo "<br>";

    #6
    $texto_posicao = strpos($texto, "3");
    echo "A posição do numero 3 é: " . $texto_posicao;

?>