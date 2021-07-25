<?php
require 'config.php';

$id = $_GET['id'];
$sql = $pdo->query("SELECT * FROM usuarios WHEE id = '$id' ");
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($dados);