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
echo "\n";
echo calcular(10,5);

// Arrays

$alunos = [
    [
        "nome" => "Fabricio",
        "idade" => 9,
        "cor" => "verde"
    ],
    [
        "nome" => "Alex",
        "idade" => 10,
        "cor" => "azul"
    ]
];

foreach($alunos as $aluno){
    echo "\n ----------------";
    echo "\n nome: ", $aluno["nome"];
    echo "\n idade: ", $aluno["idade"];
    echo "\n cor: ", $aluno["cor"];
};