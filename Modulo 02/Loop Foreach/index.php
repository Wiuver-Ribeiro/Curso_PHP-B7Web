<?php
// For Each = "Para cada";

$ingredientes = [
  'açucar',
  'Farinha de Trigo',
  'Ovo',
  'Leite',
  'Fermento em pó'
];

//Para cada item, faz tal ação.
//Sem ter acesso a chave(key) do item;
// foreach($ingredientes as $ingrediente) {
//   echo "Item: ".$ingrediente."<br>";
// }

//Com acesso a chave(key) do item;
foreach($ingredientes as $key => $ingrediente) {
  // echo "<a href='id=<?php echo $key?'>$ingrediente</a> <br>";
  echo "Item ".($key+1).": ".$ingrediente."<br>";
}
?>