<?php

$diasSemnas = [
  'Domingo', 'Segunda', 'Terça-Feira',
  'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira',
  'Sábado'
];

function diaSemana(string $data)
{
  $newData = strtotime($data);
  $resultado = date('d/m/Y', $newData);
  $diaSemana = date('w', $newData);
  echo "A Nova data: " . $resultado . "<br>";
  switch ($diaSemana) {
    case 0:
      echo "Domingo";
      break;
    case 1:
      echo "Segunda-feira";
      break;
    case 2:
      echo "Terça-feira";
      break;
    case 3:
      echo "Quarta-feira";
      break;
    case 4:
      echo "Quinta-Feira";
      break;
    case 5:
      echo "Sexta-feira";
      break;
    case 6:
      echo "Sábado";
      break;
  }
}

diaSemana('2021-06-10');
