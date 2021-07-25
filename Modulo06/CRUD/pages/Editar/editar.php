<?php
session_start();

require '../../config/config.php';

$id = $_GET['id'];
$sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id ");
$sql->bindValue(':id', $id);
$sql->execute();

$dados = $sql->fetch(PDO::FETCH_ASSOC);
?>

<form method="post">
  <input type="text" value="<?php echo $dados['id']; ?>" readonly>
  <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" >
  <input type="text" name="email" value="<?php echo $dados['email']; ?>" >
  <input type="text" name="senha" value="<?php echo $dados['senha']; ?>" >
  <input type="submit" value="Salvar" name="editar">
</form>

<?php 
  if(isset($_POST['editar'])): 

    $nome = filter_input(INPUT_POST,'nome');
    $email = filter_input(INPUT_POST,'email');

    $sql = $pdo->prepare("UPDATE usuarios SET nome= :nome, email= :email WHERE id = :id ");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    $sql->bindValue(':id',$id);
    $sql->execute();

      $_SESSION['sucesso'] = "<script>alert('Usuário alterado com sucesso');</script>";
      header("Location:../../index.php");
    
  endif;
?>