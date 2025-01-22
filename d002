<?php
// Função para remover duplicados de um array
function removerDuplicados($array) {
    // Usa array_unique para remover duplicados
    $arraySemDuplicados = array_unique($array);

    // Reorganiza os índices do array (opcional)
    $arraySemDuplicados = array_values($arraySemDuplicados);

    return $arraySemDuplicados;
}

// Exemplo de uso
$entrada = [1, 2, 2, 3, 4, 4, 5];
$resultado = removerDuplicados($entrada);

// Exibe o array resultante
echo "Array original: " . implode(", ", $entrada) . "\n";
echo "Array sem duplicados: " . implode(", ", $resultado) . "\n";
?>
