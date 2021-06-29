<h1>Seja Bem vindo(a)</h1>
<?php  
  if(isset($_COOKIE['nome'])) {
    echo "Usuário: ".$_COOKIE['nome'];
    $_COOKIE['nome'] = '';
  }
?>
<hr>