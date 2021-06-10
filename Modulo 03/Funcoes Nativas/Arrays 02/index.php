<?php
$numeros = [1,23,54,654,93];
//faz alteração por referência
//Remove o último item do array;
// array_pop($numeros);
// var_dump($numeros);

//Remove o primeiro item do array;
array_shift($numeros);
// var_dump($numeros);

//Verificar se dentro de um array tem tal valor 
if(in_array(23, $numeros)) {
  echo "Achou!";
} else {
  echo "Não achou!";
};

//para ordenar um array crescente mantendo as chaves associadas ao seus valores;
asort($numeros);
print_r($numeros);

//para ordenar um array decrescente
rsort($numeros);
print_r($numeros);

//Para transformar um array em uma string;
$nomes = ['Wiuver', 'Afonso', 'Ribeiro'];
$nomeCompleto = implode(' ',$nomes);
echo $nomeCompleto;