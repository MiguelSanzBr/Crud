<?php
include('pdo.php');
$id = FILTER_INPUT(INPUT_GET,'id');

if ($id){
  
  $sql = $pdo -> prepare("SELECT * FROM usuarios WHERE id = :id");
  $sql->bindvalue(':id',$id);
  $sql->execute();
 
  $info = $sql->fetch(PDO::FETCH_ASSOC);
}else {
  header('location: index.php');
  exit;
}
?>
<html> 
<body>
  <h1>EDITAR-USUARIO</h1>
 <form method="post" action="edit_action.php">
<input type="hidden" name="id" value="
   <?= $info['id'];?>"> 
  <label> 
   Nome: <br>
   <input type="text" name="nome" value="
   <?= $info['nome'];?>">
   </label><br><br>
   
   <label> 
   E-Mail: <br>
   <input type="email" name="email" value="
   <?= $info['email'];?>">
   </label><br><br>
   
   <label> 
   <input type="submit" value="Salvar">
   </label>
 </form>
 
  </body>
</html>