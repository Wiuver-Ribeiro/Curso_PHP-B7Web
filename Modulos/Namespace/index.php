<?php 
require 'classe1.php';
require 'classe2.php';
require 'classes/matematica/basico.php';

//Utilizando namespaces
//1- opção
use classes\matematica\Basico as Basico;

//2-opção
// use classes\matematica\Basico;

$c1 = new classe1\Produto("Notebook");
echo $c1->getNome();
echo "<br>";
$c2 = new classe2\Produto("Mouse pad");
echo $c2->getNome();
echo "<br>";

$basico = new Basico();
echo $basico->soma(10,9);
