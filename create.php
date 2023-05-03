<?php
include('pdo.php');

$name = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
if($name && $email){

  $sql = $pdo->prepare("INSERT INTO usuarios (nome,email) VALUES
  (:nome,:email)");
  $sql->bindparam(':nome',$name);
  $sql->bindparam(':email',$email);
  $sql->execute();
  header('Location: index.php');
  exit;
}else{ 
  header('Location: index.php');
  exit;
}
?>