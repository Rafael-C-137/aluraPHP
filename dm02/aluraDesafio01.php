<?php 
echo "***Apresenta os 3 maiores numero do array***";
$n = array(1, 2, 3, 4, 5);

rsort($n);//Ordena o array em ordem decrescente
$maiores = array_slice($n, 0, 3);//($variavel, indice, tamanho da fatia)
var_dump($maiores)
?>