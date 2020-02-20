<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero";


$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos";
echo "<br>Eu tenho 5 {$objeto}s"; // Eu tenho 5 canetas
echo "<br>Eu tinha 5 { $objetos}s mas perdi 3 {$objeto }s"; // Eu tinha 5 { caneta}s mas perdi 3 canetas


