<?php
include('pdo.php');
$id = filter_input(INPUT_POST,'id');
$name = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
if($id && $name && $email){

  $sql = $pdo->prepare("UPDATE usuarios SET nome=:nome, email=:email WHERE id = :id ");
  $sql->bindparam(':nome',$name);
  $sql->bindparam(':email',$email);
  $sql->bindparam(':id',$id);
  $sql->execute();
  header('Location: index.php');
  exit;
}else{ 
  header('Location: index.php');
  exit;
}
?>