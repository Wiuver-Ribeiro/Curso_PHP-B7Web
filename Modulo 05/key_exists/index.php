<?php 
 $array = [
   'nome' => "Wiuver",
   'idade' => 20,
   'empresa' => 'VASP',
   'carro' => "Gol G4",
   'profissao' => 'Desconhecido'
 ];


 if(key_exists('idade', $array)) {
   
   echo $array['idade']." anos";
 } else {
   echo "Não tem idade...";
 }