<?php 

$pdo = new PDO("mysql:dbname=test; host=localhost", "root", "");

//Busca todos os registros
$sql = $pdo->query('SELECT * FROM usuarios');

//Insere um novo registro na tabela
// $sql = $pdo->query("INSERT INTO usuarios (nome,email) VALUES('Warley Lopes', 'warley.lopes@gmail.com')");

//Deleta algum registro da tabela
// $sql = $pdo->query("DELETE FROM usuarios WHERE id = 13 ");


//Pega quantidade de registros existentes
echo "TOTAL DE REGISTROS: {$sql->rowCount()}";

//Pega todos os dados;
 $dados = $sql->fetchAll( PDO::FETCH_ASSOC );

 echo "<pre>";
 print_r($dados);
