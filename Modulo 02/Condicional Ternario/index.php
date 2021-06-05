<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
  <input type="text" placeholder="Idade" name="idade">
  <input type="submit" name="enviar">
  </form>
</body>
</html>

<?php
  if(isset($_POST['enviar'])) {
    $idade = $_POST['idade'];
    $resultado = ($idade < 18)  ? 'Menor de idade' : 'Maior de idade';
    echo $resultado;
  }
  // (condição) ? 'RESULTADO POSITIVO' : RESULTADO NEGATIVO;
?>