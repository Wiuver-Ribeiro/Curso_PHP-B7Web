<?php

function showName($name) {
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
  }
}

showName("Isabella");
showName("Kauanny");
showName("Ayeska");