<?php
// print_r($_REQUEST);

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
  //deixa acessar o sistema

  include_once('conexaoBD.php');
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // print_r('Email:' . $email );
  // print_r('<br>');
  // print_r('Senha:' . $senha);

  $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha' ";
  $result = $conexao->query($sql);
  // print_r($sql);
  // print_r($result);
  if(mysqli_num_rows($result) < 1){
    header('location: telaLogin.php');
  }
  
  else{
    header('location: sistema.php');
  }

}
else {
  //não deixa acessar o sistema
  header('location: telaLogin.php');
}

?>