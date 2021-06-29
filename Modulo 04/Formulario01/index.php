<?php 
  session_start();

  if(isset($_SESSION['nome'])) {
    echo "Olá, ".$_SESSION['nome'];
    $_SESSION['nome'] = '';
    ?> <a href="sair.php">Sair</a>
    <?php
  } else {
    header('Location:login.php');
    exit;
  }
  ?>