<?php
  require_once('header.php');
?>

<!-- action -> onde os dados serão mandados -->

<form action="recebedor.php" method="GET">
  <label for="nome">Nome:<br>
    <input type="text" id="nome" name="nome">
  </label> <br><br>
  <label for="idade">idade:<br>
    <input type="text" id="idade" name="idade">
  </label><br><br>


    <input type="submit" value="Enviar">
</form>