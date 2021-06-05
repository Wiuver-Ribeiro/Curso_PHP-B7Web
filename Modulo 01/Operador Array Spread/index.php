<?php

$bolo1 = [
  'Ovo', 'Farinha', 'Açucar', 'Leite', 'Fermento'
];
// Pega tudo que já tem e adiciona o novo valor juntos ao novo array
$bolo2 = [
  ...$bolo1, 'Corante'
];

foreach($bolo1 as $boloo) {
  echo $boloo."<br>";
}
foreach($bolo2 as $bolo) {
  echo $bolo." ";
}
