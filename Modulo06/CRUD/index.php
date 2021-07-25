<?php
session_start();
if (!$_SESSION['login']) {
  header("Location:./pages/Login/login.php");
}

require './config/config.php';

$sql = $pdo->prepare("SELECT * FROM usuarios");
$sql->execute();
$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="./assets/style.css">
<header>
  <h2>Clientes</h2>
  <div class="box-search">
    <form action="./pages/Buscar/buscar.php" method="post">
      <input type="text" placeholder="Busque um registro" name="nome" autocomplete="off">
      <input type="submit" value="Buscar" name="buscar">
    </form>
  </div>
  <div class="content-actions">
    <a title="Adicionar" class="add" href="./pages/Cadastrar/adicionar.php"><i class="fas fa-plus"></i> Novo Usuário</a>
    <a class="logout" href="./logout.php"><i class="fas fa-power-off"></i></a>
  </div>
</header>

<?php
if (isset($_SESSION['error'])) {
  echo $_SESSION['error'];
  $_SESSION['error'] = "";
}

if (isset($_SESSION['sucesso'])) {
  echo $_SESSION['sucesso'];
  $_SESSION['sucesso'] = '';
}

if (isset($_SESSION['excluido'])) {
  echo $_SESSION['excluido'];
  $_SESSION['excluido'] = '';
}

if (isset($_SESSION['cadastrado'])) {
  echo $_SESSION['cadastrado'];
  $_SESSION['cadastrado'] = '';
}

if (isset($_SESSION['autenticado'])) {
  echo $_SESSION['autenticado'];
  $_SESSION['autenticado'] = '';
}

?>

<table border="1" width="100%">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>E-mail</th>
      <th colspan="2">Opções</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($lista as $usuario):
    ?>
      <tr>
        <td><?php echo $usuario['id']; ?></td>
        <td><?php echo $usuario['nome']; ?></td>
        <td><?php echo $usuario['email']; ?></td>
        <div class="context-action">
          <td class="action"><a class="edit" title="Editar" href="./pages/Editar/editar.php?id=<?php echo $usuario['id']; ?> "><i class="fas fa-pencil-alt fa-lg "></i>Editar</a></td>
          <td class="action"><a class="delete" title="Excluir" href="./pages/Excluir/excluir.php?id=<?php echo $usuario['id']; ?> "><i class="fas fa-trash-alt fa-lg "></i>Excluir</a></td>
        </div>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<script src="https://kit.fontawesome.com/dba7af9f9b.js" crossorigin="anonymous"></script>