<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/Login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
  <title>Tela de Login</title>
</head>

<body>
  <div class="container">
    <h1 class="txt">Faça seu Login!</h1>
    <form action="LoginTipoUsuario.php" method="POST">

      <input class="input-nome" name="email" type="text" placeholder="Email" required>
      <br><br>
      <input class="input-senha" name="senha" type="password" placeholder="Senha" required>
      <br><br>
      <input class="btn" type="submit" name="submit" value="Entrar">

      <p class="paragrafo">Não é cadastrado ainda? <a class="link-cad" href="formulario.php">Cadastre-se!</a> </p>
    </form>
  </div>

  <a class="btn-voltar" href="index.php"><img src="./img/votar.png" alt="botão voltar"></a>
  



</html>