<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false


var_dump(111 == '111'); // true
var_dump(111 === '111'); // false Estritamente 
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true estritamente diferente

echo "<p class='divisao'>Relacionais If/Else</p><hr>";
$idade = 66;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo "<p class='divisao'>Spaceship</p><hr>";
var_dump(500 <=> 3); // Retorna 1 se o primeiro for maior
var_dump(50 <=> 50); // retorna 0 se os dois forem iguais
var_dump(5 <=> 50); // retornar -1 se o primeiro for menor


echo '<p class="divisao">Valores pode ser V ou F<p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

?>



