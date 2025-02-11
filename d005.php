<?php
function somar($n1, $n2) {
          return $n1 + $n2;
}
$res = somar(5, 5);
echo "SOMA\n";
echo "Resultado da soma: ". $res ."\n";
echo "*** \\ ***\n";

function imc($altura, $peso) {
          return $peso / ($altura * $altura);
}
$imc = imc(1.83, 80);
echo "IMC\n";
echo "seu imc é: \n". number_format($imc, 2, ',') . "\n";
echo "*** \\ ***\n";

function conversorTermico($c) {
          return $f = ($c * 1.8) + 32;
}

echo "Conversor de graus celsius para Fahrenheit\n";
$fahrenheit = conversorTermico(20);
echo $fahrenheit ."grals fahrenheit";
echo "*** \\ ***\n";
?>
