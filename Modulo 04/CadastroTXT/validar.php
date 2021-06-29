<?php 

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);

if(isset($nome)) {
  $lista = file_get_contents('lista.txt');
  $lista .="\n<li>".$nome."</li>";
  file_put_contents('lista.txt',$lista);

  header("Location:index.php");
}