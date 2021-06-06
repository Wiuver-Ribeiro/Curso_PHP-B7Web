<?php
//Passando por valor
// function somar($n1, $n2) {
//   $total = $n1 + $n2;
//   return $total;
// }
//   $a = 23;
//   $b = 34;
//     $soma = somar($a, $b);

// echo "TOTAL: ".$soma;

//Passando por referência
function somar($n1, $n2, &$total) {
  $total = $n1 + $n2;
}
  $a = 23;
  $b = 34;
  $soma = 0;
  somar($a, $b, $soma);

echo "TOTAL: ".$soma;