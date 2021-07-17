<?php 
namespace classe1;

class Produto {
  private $nome;
  private $quantidade;

  public function __construct($name) {
    $this->nome = $name;
  }

  public function getNome() {
    return $this->nome;
  }

  public function getQuantidade() {
    $this->quantidade;
  }
}