<?php

$numerosRequisitaramFatorial = array();
$numerosPrimos = array();
$numerosPerfeitos = array();

// uma função para calcular o fatorial usando while
function fatorial($_numero)
{
    $fatorial = 1;
    $contador = 1;

    while ($contador <= $_numero) {
        $fatorial *= $contador;
        $contador++;
    }
    echo "<p>Resultado fatorial de $_numero: $fatorial</p>";

    return $_numero;
}

array_push($numerosRequisitaramFatorial, fatorial(5));
array_push($numerosRequisitaramFatorial, fatorial(3));
array_push($numerosRequisitaramFatorial, fatorial(10));


// uma função para retornar se um numero é primo ou composto usando do...while
function numeroPrimoOuComposto($numero)
{
    $ePrimo = true;
    $contador = 2;
    do {

        if ($numero == 2) break;

        if ($numero % $contador == 0) {
            $ePrimo = false;
        }

        $contador++;
    } while ($contador < $numero);

    echo "<b>Número $numero</b>";

    echo $ePrimo ? "<p>é primo</p>" : "<p>é composto</p>";

    return $ePrimo;
}

numeroPrimoOuComposto(2) ? array_push($numerosPrimos, 2) : null;
numeroPrimoOuComposto(5) ? array_push($numerosPrimos, 5) : null;
numeroPrimoOuComposto(10) ? array_push($numerosPrimos, 10) : null;
numeroPrimoOuComposto(11) ? array_push($numerosPrimos, 11) : null;


//  uma função para retornar se um numero é perfeito
function eNumeroPerfeito($numero)
{
    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    $ePerfeito = $soma == $numero;

    echo $ePerfeito == $numero ? "<p> $numero é um número perfeito</p>" : "<p> $numero não é um número perfeito</p>";
    return $ePerfeito;
}

eNumeroPerfeito(6) ? array_push($numerosPerfeitos, 6) : null;
eNumeroPerfeito(8) ? array_push($numerosPerfeitos, 8) : null;

echo "<p>Números que chamaram a função fatorial: </p>";
print_r($numerosRequisitaramFatorial);

echo "<p>Números primos encontrados: </p>";
print_r($numerosPrimos);

echo "<p>Números perfeitos: </p>";
print_r($numerosPerfeitos);
