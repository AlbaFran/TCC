<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/CadastroDeLivros.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
  <title>Cadastro de Livros</title>
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

    $titulo_livro = $_POST['titulo_livro'];
    $editora = $_POST['editora'];
    $categoria = $_POST['categoria'];
    $numero_paginas = $_POST['numero_paginas'];
    $ano = $_POST['ano'];

    $result = mysqli_query($conexao, "INSERT INTO livros (titulo_livro, editora, categoria, numero_paginas, ano) VALUES ('$titulo_livro', '$editora', '$categoria', '$numero_paginas', '$ano')");

    header('Location: gerente_dashboard.php');
  }
  ?>



  <div class="container">
    <form action="CadastroDeLivros.php" method="POST">

      <h1 class="txt"> Cadastro de Livros!</h1>

      <div class="inputBox-titulo_livro">
        <input type="text" name="titulo_livro" id="titulo_livro" placeholder="Nome do Livro" class="inputUser" required>
        <label for="titulo_livro"></label>
      </div>


      <div class="inputBox-editora">
        <input type="text" name="editora" id="editora" placeholder="Editora" class="inputUser" required>
        <label for="editora"></label>
      </div>


      <div class="inputBox-categoria">
        <input type="text" name="categoria" id="categoria" placeholder="Categoria" class="inputUser" required>
        <label for="categoria"></label>
      </div>


      
        

        <div class="inputBox-numero_paginas">
          <input type="text" name="numero_paginas" id="numero_paginas" placeholder="Número de Páginas" class="inputUser" required>
          <label for="cpf"></label>
        </div> 


      <div class="inputBox-ano">
        <input type="text" name="ano" id="ano" placeholder="Ano de Publicação" class="inputUser" required>
        <label for="ano"></label>
      </div>


      <input class="btn" type="submit" name="submit" id="submit">


    </form>
  </div>
  <a href="gerente_dashboard.php"><img class="btn-voltar" src="./img/votar.png" alt="botão voltar"></a>
 
</body>

</html>