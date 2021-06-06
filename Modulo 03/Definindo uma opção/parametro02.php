<?php

function showName(String $name= 'usuária desconhecida') {
  echo "<h1>Seu nome é $name, ";
  switch ($name) {
    case "Isabella":
      echo "Próxima peguete <br> </h1>";
      break;
    case "Kauanny";
      echo "Próxima peguete <br> </h1>";
      break;
    case "Ayeska";
      echo "Ex namorada... 😢 <br></h1>";
      break;
      case " ";
      echo "Usuário desconhecido...";
      break;
  } 
}


showName("Isabella");
showName("Kauanny");
showName("Ayeska");
showName(1);
//Caso não passada nenhuma valor, será atribuido o valor que foi setado;
showName();