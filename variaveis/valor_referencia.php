<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

// Atribuição por valor
$variavelvalor = $variavel;
echo "<br>$variavelvalor";
$variavelvalor = 'novo valor';
echo "<br>$variavel";
echo " $variavelvalor";


// Atribuição por Referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";