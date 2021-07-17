<?php 

  class Matematica {

    public static string $nome = 'Wiuver Ribeiro';

    public static function somar($x, $y) {
      return $x+$y;
    }
  }
  //Instanciando
  $conta1 = new Matematica();
  $resultado = $conta1->somar(10,24);
  echo "SOMA: {$resultado} <br>";

  //Sem instanciar
  echo "A soma =".Matematica::somar(10,24)."<br>";
  echo Matematica::$nome;
