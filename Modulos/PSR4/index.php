<?php 

spl_autoload_register(function($class) {
  require 'classes/'.$class.'.php';
});

$m1 = new Matematica();
echo "SOMA: {$m1->somar(10,20)}";