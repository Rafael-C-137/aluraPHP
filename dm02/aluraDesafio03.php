<?php
echo "***Ordena os elementos do array em ordem alfabetica***";

 function ordAlfa($array) {
          sort($array);
          return $array;
 }

 $n = ["Rafael", "Almeida", "Nunes"];
 $n = ordAlfa($n);
 var_dump($n);
?>