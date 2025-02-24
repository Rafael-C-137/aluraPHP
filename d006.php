<?php
$filme = [
          "nome" => "Star Wars",
          "ano" => 1992,
          "nota" => 9.8,
          "genero" => "ficcao-cientifica"

          ];

          $filmeJson = json_encode($filme);
          var_dump($filmeJson);

          $filmeStr = json_decode($filmeJson);
          var_dump($filmeStr);


?>