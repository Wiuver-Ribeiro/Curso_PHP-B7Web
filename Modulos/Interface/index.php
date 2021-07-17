<?php 

interface Database {
  public function listarProdutos();
  public function adicionarProdutos();
  public function alterarProdutos();
}

class MysqlDB  implements Database {
  public function listarProdutos() {

  }
  public function adicionarProdutos() {

  }
  public function alterarProdutos() {

  }
}

class OracleDB implements Database{
  public function listarProdutos() {

  }
  public function adicionarProdutos() {

  }
  public function alterarProdutos() {

  }
}