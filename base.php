<?php

echo "Olá, mundo! \n";
echo "Tudo bem? \n";

// Variaveis

$nome = "Fabricio";
$idade = 9;

echo "Meu nome é ". $nome . " e tenho ". $idade . " anos de idade. \n";

// Condicionais

if ($idade >= 18 ){
    echo "já pode joga na blaze!! \n";
}else{
    echo "jogue rebox \n";
}

// Loop

for($i = 0; $i < 10; $i++){
    echo $i . " ";
}

// Funções

function calcular($a, $b){
    return $a + $b;
}
echo calcular(10,5);