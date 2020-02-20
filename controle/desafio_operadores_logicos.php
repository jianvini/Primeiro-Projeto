<div>Desafio Operadores Logicos</div>

<!--
    Dois trabalhos -> terça quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    -Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Tabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Tabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button , select {
        font-size: 1.8rem;
    } 
</style>

<?php

!!$_POST['t1'];
!!$_POST['t2'];

if(!!$_POST['t1'] == 1) {
    $trabalhouTerca = true;
}

if(!!$_POST['t2'] == 1) {
    $trabalhouQuinta = true;
}

if ($trabalhouTerca && $trabalhouQuinta) {
    echo "Ir comprar uma TV 50' Polegadas e ir tomar sorvete!";
} else if ($trabalhouTerca xor $trabalhouQuinta) {
    echo "Ir comprar uma TV 32' Polegadas e ir tomar sorvete!";
} else {
    echo "Ficar em casa e ser mais saudável!";
}
