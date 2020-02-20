<div class="titulo">Operadores Logicos</div>

<?php
echo "<p class='divisao'>Negação Logica</p>";
var_dump(true);
echo '<br>';
var_dump(!!true); // not

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true); // true
var_dump(true && false); // false
var_dump(false && true); // false
var_dump(false && false); // false

var_dump(true and true); 
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true); // true
var_dump(true || false); // true
var_dump(false || true); // true
var_dump(false || false); // false

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>"; // sempre que for um ou outro sera verdadeiro
var_dump(true xor true); // false 
var_dump(true xor false); // true
var_dump(false xor true); // true
var_dump(false xor false); // false

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";

if($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo 'Pode se aposentar';
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}

