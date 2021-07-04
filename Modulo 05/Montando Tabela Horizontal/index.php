<?php
$array = [
  'nome' => "Wiuver",
  'idade' => 20,
  'empresa' => 'VASP',
  'carro' => "Gol G4",
  'profissao' => 'Desconhecido',
  'cidade' => 'Morrinhos'
];

$keys = array_keys($array);
$values = array_values($array);

?>


<table border="1">
  <tr>
    <?php foreach ($keys as $key) : ?>
      <th><?php echo $key; ?></th>
    <?php endforeach; ?>
  </tr>

  <tr>
    <?php foreach ($values as $value) : ?>
      <th><?php echo $value; ?></th>
    <?php endforeach; ?>
  </tr>
</table>