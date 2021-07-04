<?php 
 $array = [
   'nome' => "Wiuver",
   'idade' => 20,
   'empresa' => 'VASP',
   'carro' => "Gol G4",
   'profissao' => 'Desconhecido'
 ];

// Criar um novo array com as chaves
 $chaves = array_keys($array);

foreach ($chaves as $keys) {
  echo $keys." <br>";
}
echo "<hr>";
//Cria um novo array somente com os valores
$valores = array_values($array);

foreach ($valores as $values) {
  echo $values." <br>";
}