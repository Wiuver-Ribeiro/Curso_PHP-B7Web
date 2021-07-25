<?php
session_start();
require '../../config/config.php';

if (isset($_POST['login'])) :

  $email = filter_input(INPUT_POST, 'email');
  $senha = filter_input(INPUT_POST, 'senha');

  if (empty($email) && empty($senha)) {
    $_SESSION['verifica'] = "<script>alert('Preencha os campos...')</script>";
    header("Location:../../Pages/Login/login.php");
  } else {
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email and senha = :senha ");
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      //Transforma dado em um array com toda as informações do usuário
      $dado = $sql->fetch();

      if ($email == $dado['email'] && $senha == $dado['senha']) {
        $_SESSION['login'] = true;
        $_SESSION['autenticado'] = "<script>alert('Logado com sucesso!');</script>";

        header("Location:../../index.php");
        exit;
      }
    } else {
      $_SESSION['nao_autenticado'] = "e-mail ou senha incorretos";
      header("Location:login.php");
      exit;
    }
  }
endif;
