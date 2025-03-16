<?php 

require __DIR__ . "/Filme.php";

$filme = new Filme();
$filme->setNome('Star Wars');
$filme->setAnoLancamento(1999);
$filme->setGenero('Ficção-Científica');

$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);
$filme->avalia(10);



var_dump($filme);
echo $filme->media();
?>