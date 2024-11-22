<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/telaFormulario.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
  <title>Formulario</title>
</head>

<body>
  <?php
  //testando se os dados estão sendo enviado ao banco de dados
  if (isset($_POST['submit'])) {
    //   print_r($_POST['nome']);
    //   print_r('<br>');
    //   print_r($_POST['email']);
    //   print_r('<br>');
    //   print_r($_POST['telefone']);
    //   print_r('<br>');
    //   print_r($_POST['senha']);

    include_once('conexaoBD.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro (nome, email, telefone, cpf, senha) VALUES ('$nome', '$email', '$telefone', '$cpf', '$senha')");

    header('Location: telaLogin.php');
  }
  ?>



  <div class="container">
    <form action="formulario.php" method="POST">

      <h1 class="txt">Faça seu Cadastro!</h1>

      <div class="inputBox-nome">
        <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="inputUser" required>
        <label for="nome"></label>
      </div>


      <div class="inputBox-email">
        <input type="email" name="email" id="email" placeholder="Email" class="inputUser" required>
        <label for="nome"></label>
      </div>


      <div class="inputBox-telefone">
        <input type="tel" name="telefone" id="telefone" placeholder="Telefone" class="inputUser" required>
        <label for="telefone"></label>
      </div>


      
        

        <div class="inputBox-cpf">
          <input type="text" name="cpf" id="cpf" placeholder="CPF" class="inputUser" required>
          <label for="cpf"></label>
        </div> 


      <div class="inputBox-senha">
        <input type="password" name="senha" id="senha" placeholder="Senha" class="inputUser" required>
        <label for="senha"></label>
      </div>


      <input class="btn" type="submit" name="submit" id="submit">


    </form>
  </div>
  <a href="telaLogin.php"><img class="btn-voltar" src="./img/votar.png" alt="botão voltar"></a>
 
</body>

</html>