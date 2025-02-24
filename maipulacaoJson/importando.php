<?php
$caminho = __DIR__ . '/filme.json';
$conteudoArquivo = file_get_contents($caminho);
$filme = json_decode($conteudoArquivo, true);

var_dump($filme);
?>