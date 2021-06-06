<?php

function somar($n1, $n2) {
   $soma = $n1 - $n2;
   return $soma;
 }

 $resultado = somar(120,2);
 function mostrar($result) {
   echo "O resultado é de ".$result;
 }

 mostrar($resultado);