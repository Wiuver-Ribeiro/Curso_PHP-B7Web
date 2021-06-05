<?php 

$tipo = 'texto';

switch($tipo) {
  case 'foto':
    echo 'Exibindo uma foto';
    break;
  case 'video':
    echo 'Exibindo um video';
    break;
  case 'texto':
    echo 'Exibindo um texto';
    break;
    
    default: 'Conteúdo desconhecido...';
    break;
}