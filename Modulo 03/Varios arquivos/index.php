<?php

//include da erro se n achar o arquivo, mas executa o resto
//require da erro fatal e prejudica todo o resto da aplicação
//include_once só puxa o arquivo uma única vez
//require_once só puxa o arquivo uma única vez

  require('config.php');

  require('header.php');
  echo "DELICIA";

  echo "Usuário <b>$usuario</b>"." "."Senha <b>$senha</b>";

  require('footer.php');