<?php
// filter_input => obtém a variável específica e a filtra opcionalmente;
//1- params: tipo de método que foi utilizado para enviar GET/POST 
//2 - params: nome_do_campo, verifica se já está preenchido;
//3- params: FILTER_VALIDATE_EMAIL -> valida se o que foi enviado realmente é um e-mail.
//4- params: FILTER_SANITIZE_NUMBER_INT -> pega só valores
// FILTER_VALIDATE_INT -> Recebe só números inteiros;

// FILTER_SANITIZE_SPECIAL_CHARS -> Códigos html, css, js não vão ser executados;

// FILTER_VALIDATE_EMAIL
//FILTER_VALIDATE_INT
//FILTER_VALIDATE_IP
//FILTER_VALIDATE_URL

//FILTER_SANITIZE_SPECIAL_CHARS
//FILTER_SANITIZE_NUMBER_INT
//FILTER_SANITIZE_URL
//FILTER_SANITIZE_STRING
//FILTER_SANTIIZE_FLOAT



$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST,'senha');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);


$sobrenome = 'Ribeiro';

if($nome && $senha && $email) {
  echo "Dados enviados com sucesso <br>";
  echo $nome." ".$senha." ".$email;

} else {
  header('Location:index.php');
  exit(); // Utiliza o exit, envia um  página em branco
}



?>

<a href="index.php">Voltar</a>