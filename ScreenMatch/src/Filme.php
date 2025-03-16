<?php
Class Filme {
          private  string $nome;
          private int $anoLancamento;
          private string $genero;
          private array $notas = [];


          public function getNome(): string {
                    return $this->nome;
          }

          public function setNome(string $nome): void {
                    $this->nome = $nome;
          }

          public function getAnolancamento(): int {
                    return $this->anolancamento;
          }

          public function setAnoLancamento(int $anoLancamento): void {
                    $this->anoLancamento = $anoLancamento;
          }

          public function getGenero(): string {
                    return $this->genero;
          }

          public function setGenero(string $genero): void {
                    $this->genero = $genero;
          }

          public function avalia(float $nota): void {
                    $this->notas[] = $nota;
          }

          public function media(): float {
                    $somaNotas = array_sum($this->notas);
                    $quantidadeNotas = count($this->notas);
                    return $somaNotas / $quantidadeNotas;
          }
          

}
?>