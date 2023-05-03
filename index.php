<?php 
include("pdo.php"); 
$array=[];
$act = $pdo -> query("SELECT * FROM usuarios");
  $array = $act -> fetchAll(PDO::FETCH_ASSOC);
?>
<html><body>
  <a href="form.php"><h1>Adicionar Usario</h1></a><br><br>
  <table border="1" width="100%">
    <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>AÇÃO</th>
    </tr>
    <?php foreach ($array as $usr): ?>
      <tr>
        <td><? echo $usr['id'];?></td>
        <td><? echo $usr['nome'];?></td>
        <td><? echo $usr['email'];?></td>
        <td>
          <a href="edit.php?id=<? echo $usr['id'];?>">[Editar]</a>
          <a href="del.php?id=<?php echo htmlspecialchars($usr['id']);?>" onclick="return confirm('Tem certeza que deseja excluir?')">[Apagar]</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
</body></html>