<?php 
  include('pdo.php');
  $id = filter_input(INPUT_GET,'id');
  if ($id){
    $sql = $pdo -> prepare("DELETE FROM usuarios WHERE id = :id");
    $sql->bindvalue(':id',$id);
    $sql->execute();
  }
  header('location: index.php');
  exit;
?>