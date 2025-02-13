<?php
echo "***Retorna uma string separando os elementos por virgula***";

$lista = ["Banana", "Maça", "Laranja"];
$separado = implode(", ", $lista);
var_dump($separado);

?>