<?php 
 $array = [
   'nome' => "Wiuver",
   'idade' => 20,
   'empresa' => 'VASP',
   'carro' => "Gol G4",
   'profissao' => 'Desconhecido',
   'cidade' => 'Morrinhos'
 ];

// $keys = array_keys($array);
// $values = array_values($array);

?>


<table border="1">
<?php foreach($array as $keys => $values): ?>
  <tr>
    <td><b><?php echo $keys; ?></b></td>
    <td><?php echo $values; ?></td>
  </tr>
  <?php endforeach; ?>
</table>