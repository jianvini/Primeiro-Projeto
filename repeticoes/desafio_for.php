<div class="titulo">Desafio For</div>

<?php

$array = [
    '#',
    '##',
    '###',
    '####',
    '#####'
];

for($i = 0; $i <= count($array); $i++ ) {
    echo "{$array[$i]}<br>";
}

echo '<hr>';


$array2 = [
    '#',
    '##',
    '###',
    '####',
    '#####'
];
foreach ($array2 as $key => $value) {
    echo "$key|$value<br>";
}
