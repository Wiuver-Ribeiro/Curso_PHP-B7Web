<?php

$texto = "Wiuver Afonso Ribeiro";

file_put_contents('nome.txt', $texto);

echo "Arquivo criado com sucesso... <br><br>";

$nome = file_get_contents('nome.txt');
echo $nome;