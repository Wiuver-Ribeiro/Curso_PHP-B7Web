<?php
$dizimo = function(int $valor) {
  return $valor * 0.1;
};

echo "O desconto é de ". $dizimo(2810);