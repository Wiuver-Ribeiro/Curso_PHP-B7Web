<?php 
session_start();

// Session consigo armazenar informações e 
// ler informações independente das páginas que eu estou;
//Compartilhamentos de informações

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT);

if($nome && $email && $idade) {
  $expiracao = time() + (86400 * 30);

  setcookie('nome', $nome,$expiracao);

  echo "Dados enviados com sucesso... <br>";
  echo "Nome: $nome | Email: $email | Idade: $idade <br>";
} else {
  $_SESSION['error'] = "Preencha os itens corretamente!";
  header("Location:index.php");
  exit;
}
?>
<a href="index.php">Voltar</a>