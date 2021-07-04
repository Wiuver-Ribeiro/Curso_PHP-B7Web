<?php 

// $users = ['Wiuver','Kauanny', 'Djoan', 'Mônica', 'Fabiano','Lara'];

// $numeros = [1,2,3,4,5,6,7,8,9,10];

// function somar($subtotal, $item) {
//   $subtotal+=$item;
//   return $subtotal;
// }
//Array que vai sofrer a iteração
// nome da função
// $total = array_reduce($numeros, 'somar');
// echo $total;

$pessoas = [
  ['nome' => 'Wiuver', 'sexo' => 'M', 'nota' => 2],
  ['nome' => 'Kauanny', 'sexo' => 'F', 'nota' => 10],
  ['nome' => 'Sophia', 'sexo' => 'F', 'nota' => 6],
  ['nome' => 'Fabiano', 'sexo' => 'M', 'nota' => 4],
  ['nome' => 'Djoan', 'sexo' => 'M', 'nota' => 8],
  ['nome' => 'Ayeska', 'sexo' => 'F', 'nota' => 8],
  ['nome' => 'Monica', 'sexo' => 'F', 'nota' => 6],
];
//Total de homens
function contar_m($subtotal, $item) {
  if($item['sexo'] == 'M') {
    $subtotal++;
  } 
  return $subtotal;
}

$total_m = array_reduce($pessoas, 'contar_m');
//Soma de notas
function sumNotas($subtotal, $item) {
  $subtotal+=$item['nota'];
  return $subtotal;
}

$somaNotas = array_reduce($pessoas, 'sumNotas');

echo "Possui {$total_m} pessoas do sexo MASCULINO! <br>";
echo "Soma de todas as notas: {$somaNotas}";