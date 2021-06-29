<?php 

  session_start();

  $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);

  if($nome) {
    echo "Dados enviados com sucesso... <br>";
    $_SESSION['nome'] = $nome;
    header('Location:index.php');
  } else {
    $_SESSION['aviso'] = "Erro!, tente novamente...";
    header("Location:login.php");
    exit;
  }