<?php
  //Trabalha com milisegundos
  //date(format_data, horas)
  echo date('d/m/Y H:i:s')."<br>"; //Pega a data do servidor;

  $data = '2021-09-16';
  //Coloca a data no formato brasileiro
  $time = strtotime($data);echo date('d/m/Y', $time);