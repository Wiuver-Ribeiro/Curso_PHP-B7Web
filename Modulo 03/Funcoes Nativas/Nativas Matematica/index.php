<?php
// //Pegar o valor absoluto de um número;
 $numero = -2344.3;
echo abs($numero);

// //Função pi();
echo pi();

//Usados para uma loja virtual;

//arredondar para baixo;
$numero = 2.7;
echo floor($numero);

// //arredondada para cima;
$numeroo = 2356.4;
echo ceil($numeroo);

//Dependendendo do número ele arredonda pra cima ou pra baixo;
$amount = 5439.87;
echo round($amount,3)." Valor Final do Iphone";

//Gerar um número aleátorio
$aleatorio = rand(0, 14);
echo $aleatorio;

//Maior número de uma lista
$lista = [1,2,4,5,61234,0];
echo max($lista);

//Menor número de uma lista
$lista = [1,2,4,5,61234,0];
echo min($lista);