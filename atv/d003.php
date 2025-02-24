<?php 
$notaAlunos = [5,7,8,6,10,4,3,9];

foreach ($notaAlunos as $indice => $nota) {
          if ($nota > 6) {
                    echo "Aluno ". ($indice + 1) . "Nota $nota - Aprovado\n";
          } else {
                    echo "Aluno ". ($Indice + 1) . "Nota $nota - Reprovado\n";
          }
}
?>