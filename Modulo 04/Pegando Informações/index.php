<?php
require_once('header.php');
?>

<!-- action -> onde os dados serão mandados -->

<form action="recebedor.php" method="POST">
  <label for="nome">Nome:<br>
    <input type="text" id="nome" name="nome">
  </label> <br><br>
  <label for="senha">Senha:<br>
    <input type="password" id="senha" name="senha">
  </label><br><br>
  <label for="email">E-mail
  <input type="text" id="email" name="email">
  </label> <br><br>


  <input type="submit" value="Enviar">
</form>