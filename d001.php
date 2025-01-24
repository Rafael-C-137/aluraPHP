<?php
function removeDuplicados($array) {
          $arrayFinal = [];

          foreach ($array as $valor) {
                    $duplicado = false;

                    foreach ($arrayFinal as $valorUnico) {
                             if ($valor === $valorUnico) {
                              $duplicado = true;
                              break;
                             }
                    }
                    
                    if (!$duplicado) {
                              $arrayFinal[] = $valor;
                    }
          }
          return $arrayFinal;
}

$entrada = [1, 2, 2, 3, 3, 4, 4, 5, 5];
$resultado = removeDuplicados($entrada);

echo "Array original: " . implode(", ", $entrada) . "\n";
echo "Array sem duplicados: " . implode(", ", $resultado) . "\n";
?>