<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos); // Verificar se é ou não um Array
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo " ${dadosCompletos['idade']}";

unset($dadosCompletos["nome"]); // Remover elementos
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos); // aplicar NULL
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares; // Tomar cuidado para não subscrever 
echo '<br>';
print_r($decimais);

$decimais = array_marge($pares, $impares); // Junta os valores 0, 2, 4, 6, 8, 1, 3, 5, 7, 9
echo '<br>';
print_r($decimais);

sort($decimais); // Organiza 0,1,2,3,4,5,6,7,8,9
echo '<br>';
print_r($decimais);

