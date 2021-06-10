<?php
//trim -> retira todos os espaços
//strlen -> conta a quantidade de caracteres de uma palavra

  $nomeSujo = " Wiuver e Ayeska";
  $nomeLimpo = trim($nomeSujo);
  echo "NOME SUJO:".strlen($nomeSujo)."<br>";
  echo "NOME LIMPO:".strlen($nomeLimpo)."<br>";

  //strtolower -> transforma todos os caracteres da palavra em minúsculo

  $lower = strtolower($nomeLimpo);
  echo $lower."<br>";

  //strtoupper -> transforma todos os caracteres da palavra em maiúsculo
  $upper = strtoupper($nomeLimpo);
  echo $upper."<br>";

  //str_replace -> procura tal palavra e muda ela pelo valor desejado
  //1- palavra que deseja trocar
  //2- nova palavra que deseja colocar 
  //3- a variavel que contem o conteudo para ser trocado;
  $substitui = str_replace('Ayeska', 'Kauanny',$nomeSujo);
  echo "Novo casal: ".$substitui."<br>";

  //Pegaar uma parte da string
  $boy = "Wiuver Afonso Ribeiro";
  $newBoy = substr($boy, 0, 5);
  
  echo $newBoy."<br>"; // Wiuve
