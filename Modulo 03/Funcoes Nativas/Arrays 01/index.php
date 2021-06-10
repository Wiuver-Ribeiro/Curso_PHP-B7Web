<?php 
$lista = ['Wiuver', 'Kauanny', 'Djoan', 'Mônica', 'Fabiano'];

//Conta a quantidades de items no array;
echo "TOTAL DE USUÁRIOS: ".count($lista)."<br>";


$alunos = ['Wiuver', 'Kauanny', 'Djoan', 'Mônica', 'Fabiano'];
$aprovados = ['Wiuver', 'Kauanny', 'Djoan'];

// Tira a diferença de um array para o outro;

$reprovados = array_diff($alunos, $aprovados);
print_r($reprovados)."<br>";

$numeros = [1,23,35,56,43,2,4];

$filtrados = array_filter($numeros, function($item) {
  if($item < 40) {
    return true;
  } else {
    return false;
  }
});

print_r($filtrados)."<br>";

array_map(function($item) {
  echo $item."<br>";
},$numeros);