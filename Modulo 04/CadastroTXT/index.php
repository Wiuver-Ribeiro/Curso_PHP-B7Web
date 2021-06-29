<form action="validar.php" method="post">
  <label for="nome">Novo nome: <br>
  <input type="text" name="nome">
  </label>
  <input type="submit" value="Adicionar" autocomplete="off">
  <input type="submit" value="Limpar">

</form>

<h2>Lista de nomes:</h2>
<?php

  $lista = file_get_contents('lista.txt');
?>
  <ul>
    <li><?php echo $lista ?></li> 
  </ul>

