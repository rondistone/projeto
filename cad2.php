<?php
    $nome = strip_tags($_POST['nome']);
    $endereco = strip_tags($_POST['endereco']);
    $telefone = strip_tags($_POST['telefone']);
    $email = strip_tags ($_POST['email']);
  
 
  
  include "banco.php";
 
  $query = "select * from alunos where email = '$email'";
  $exec = mysqli_query($con, $query);

  $total = mysqli_num_rows($exec);
  if($total == 1){
    header("Location: index.php?email=$email");
  }else{
  
    
  $query = "insert into alunos(nome, endereco, telefone, email) values ('$nome', '$endereco', '$telefone', '$email')";
  mysqli_query($con,$query);
  setcookie("nome", $nome, time()+60*60*24);
  setcookie("endereco", $endereco, time()+60*60*24);
  setcookie("telefone", $telefone, time()+60*60*24);
  setcookie("email", $email, time()+60*60*24);
  header("Refresh:3 index.php");
  
   echo "Usuário cadastrado com sucesso!";
  }
  ?>
  