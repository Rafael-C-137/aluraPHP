<?php
if (!isset($_GET['filme'])) {
    echo "<h1>Erro: Nenhum filme foi recebido.</h1>";
    exit();
}

$filme = htmlspecialchars($_GET['filme']);
echo "<h1>Sucesso!! Filme $filme foi inserido.</h1>";
?>