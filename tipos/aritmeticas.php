<div class="titulo">Operações Aritméticas</div>


<?php
echo 1 + 1, '<br>';
var_dump(1 + 1); 
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>';
echo round(7 / 4), '<br>';
echo 7 % 4, '<br>';
echo 7 % 2, '<br>'; // Utilazado para descobrir se o numero é impar ou par, se o restante for 1 é impar caso seja 0 é par
echo 8 % 2, '<br>'; 
echo 7 / 0, '<br>'; // Todo numero divido por zero o resultado é infinito
echo intidiv(7, 0); // Erro!
echo 4 ** 2, '<br>';

// Precedência de operadores:
// () => ** / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo (2 + 3) * 4) ** 2, '<br>';


