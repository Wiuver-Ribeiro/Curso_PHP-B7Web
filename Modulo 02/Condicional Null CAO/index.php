<?php
  $nome = "Wiuver";
// jeito antigo
  // $nomeCompleto = $nome;
  // $nomeCompleto .= isset($sobrenome) ? $sobrenome : '';

  $nomeCompleto = $nome;
  $nomeCompleto .= $sobrenome ?? ' Afonso';



  echo $nomeCompleto; 