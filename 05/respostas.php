<?php

//1
$numero = 5;
    for($i = $numero; $i > 0; $i--){
        echo "Em For falta $i segundos <br>";  
    }
    echo "<hr>";

    while($numero > 0){
        
        echo "Em While falta $numero segundos <br>";
        $numero--;
       
    }
    echo "<hr>";
    $c = 5;
    do{
        echo "Em Do While falta $c segundos <br>";
        $c--;
    }
    while($c > 0);

    echo "<hr>";

    //2
    $tabuada_numero = 8;
   for($i = 1; $i < 11; $i++){
    echo "$tabuada_numero x $i = " . $i * $tabuada_numero . "<br>";
   }
   echo "<hr>";
   $tabuada2_numero = 8;
   $c = 1;
   while($c < 11){
    echo "$tabuada2_numero x $c = " . $c * $tabuada2_numero . "<br>";
    $c++;
   }

    echo "<hr>";

    $numerox = 8;
    
    echo "O número ao quadrado de $numerox é: " . ($numerox * $numerox);

    echo "<hr>";
   //3
    $numero = 14;
    if($numero % 2 == 0){
        echo "$numero é um número par";
    } else{
        echo "$numero é um número impar";
    }

    echo "<hr>";
    //4
    $numero1 = 10;
    $numero2 = 15;
    $numero3 = 20;
    
    $media =  ($numero1 + $numero2 + $numero3) / 3 ;
    echo $media; 
     
    


?> 