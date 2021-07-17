<?php  
//Sem autoload
// require 'classes/matematica.php';

//Com Autoload
spl_autoload_register(function($class){
  require 'classes/'.$class.'.php';
});

// $m = new Matematica();

// echo "A SOMA = {$m->somar(20,23)}";

$registro1 = new Registra();
$registro1->setUsuario('Wiuver Ribeiro');
echo "Usuário logado: <em>{$registro1->getUsuario()}</em> <br>";

$registro1->setLogin("wiuver_ribeiro");
$registro1->setSenha("Wiuver5421!@");

echo "<b>Login:</b> {$registro1->getLogin()} <br>";
echo "<b>Senha:</b> {$registro1->getSenha()} <br>";

echo "<h1>Login</h1>";

$registro1->login("wiuver_ribeiro", "Wiuver5421!@");
$registro1->setSenha("Ayeska123");
$registro1->login("wiuver_ribeiro", "Ayeska123");






