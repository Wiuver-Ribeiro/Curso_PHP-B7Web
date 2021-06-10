<?php
 $nomeCompleto = "wiuver afonso ribeiro";
// 
 $index = strpos($nomeCompleto,"Afonso");
 echo  ($index > -1) ? "Achou <br>" : "Não achou <br>";
 echo "A palavra se encontra na posição: ".$index."<br>";

 //Para colocar a primeira letra das 1 palavra em maiúsculo;

 echo ucfirst($nomeCompleto)."<br>"; //Wiuver afonso ribeiro

 //Coloca todas as primeiras letras da palavra em maiúsculo;
 echo ucwords($nomeCompleto)."<br>";

 //Transforma uma string em array;
 //1- pelo que deseja separar
 //2- variavel que deseja transformar em array;
 $nomes = explode(' ', $nomeCompleto);
 print_r($nomes)."<br>";

 //Usado para definir quantas casas decimais vai ter depois da vírgula;
 $numero = 124.35;
 echo number_format($numero, 2)."<br>";