<?php 

class Registra {
  public $usuario;
  private $login;
  private $senha;


  public function getUsuario() {
    return $this->usuario;
  }

  public function getLogin() {
    return $this->login;
  }
  
  public function getSenha() {
    return $this->senha;
  }

  public function setUsuario($usuario) {
    if($usuario == "") {
      echo "Preencha os dados...";
    } else {
      $this->usuario = $usuario;
    }
  }

  public function setLogin($login) {
    $this->login = $login;
  }

  public function setSenha($senha) {
    $this->senha = $senha;
  }

  public function login($login, $senha) {
    if($login == $this->login && $senha == $this->senha) {
      echo "Usuário logado com sucesso. ";
    } else {
      echo "Usuário não encontrado...";
    }
  }
}