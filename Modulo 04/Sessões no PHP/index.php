<?php 
session_start();

  include_once 'header.php';

  if($_SESSION['error']) {
    echo $_SESSION['error'];
    $_SESSION['error'] = '';
  }

?>

<form action="recebedor.php" method="post">
<label for="nome">Nome:
  <input type="text" id="nome" name="nome">
</label> <br> <br>
<label for="E-mail">E-mail:
  <input type="text" id="email" name="email">
</label> <br> <br>
<label for="idade">idade:
  <input type="text" id="idade" name="idade">
</label> <br> <br>

  <input type="submit" value="Enviar">
</form>

