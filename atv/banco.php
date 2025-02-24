<?php 

$titular = "Rafael Almeida";
$saldo = 0;
do {
echo "***Banco***\n";
echo "Escolha uma opção\n";
echo "1- Saldo em Conta\n";
echo "2- Deposito\n";
echo "3- Sacar\n";
echo "4- sair\n";
          
     $res = (int) fgets(STDIN);
     switch ($res) {
          case 1:
                    echo "Titular da conta: ". $titular ."\n";
                    echo "Saldo da conta: ". $saldo ."\n";
                    break;

          case 2:
                    echo "Digite o valor que deseja depositar:\n";
                    $depositar = floatval(fgets(STDIN));
                    $saldo = $saldo + $depositar;
                    echo "Deposito realizado com sucesso!\n";
                    echo "Seu saldo atual é de: ". $saldo . " reais.\n";
                    break;
          case 3:
                    echo "Digete quanto deseja sacar: \n";
                    $valorSacar = (int) fgets(STDIN);
                    if ($valorSacar > $saldo ) {
                    echo "Saldo Insuficiente\n \n";
          }else { 
                    $saldo -= $valorSacar;
                    echo "Seu saldo atual é de: ". $saldo . " reais\n";
                    }
                    break;
          case 4:
                    echo "Até mais!!!";
                    break;
                    default:
                    echo "Opção não encontrada\n";
     }
} while  ($res != 4);
?>