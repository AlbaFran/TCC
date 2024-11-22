<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/AcervoDeLivros.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Acervo De Livros</title>
</head>
 

<body>
  <?php

  echo '
  <a href="gerente_dashboard.php" class="w3-display-topleft">
      <i class="fa fa-arrow-circle-left w3-large w3-black w3-button w3-xxlarge"></i>     
  </a> 
  ';

  require_once 'conexaoBD.php';

  echo '
                <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin">
                <h1 class="w3-center w3-black w3-round-large w3-margin">Acervo de Livros</h1>
                <table class="w3-table-all w3-centered">
                <thead>   
                    <tr class="w3-center w3-black">
                        <th>Código</th>
                        <th>Livro</th>
                        <th>Editora</th>
                        <th>Categoria</th>
                        <th>Páginas</th>
                        <th>Ano</th>
                        <th>Excluir</th>
                        <th>Atualizar</th>
                    </tr>
                <thead>
                ';

                $sql = "SELECT * FROM livros";
                $resultado = $conexao->query($sql);

                if ($resultado != null)

                foreach ($resultado as $linha) {
                echo '<tr>';
                echo '<td>' . $linha['idlivros'] . '</td>';
                echo '<td>' . $linha['titulo_livro'] . '</td>';
                echo '<td>' . $linha['editora'] . '</td>';
                echo '<td>' . $linha['categoria'] . '</td>';
                echo '<td>' . $linha['numero_paginas'] . '</td>';
                echo '<td>' . $linha['ano'] . '</td>';


                echo '<td><a href="ExcluirLivros.php?id=' . $linha['idlivros'] . '&titulo_livro=' . $linha['titulo_livro'] . '&editora=' . $linha['editora'] . '&categoria=' . $linha['categoria'] . '&numero_paginas=' . $linha['numero_paginas'] . '&ano=' . $linha['ano'] . '"<i class="fa fa-user-times w3-large w3-text-black"></i> </a></td></td>';

                echo '<td><a href="AtualizarLivros.php?id=' . $linha['idlivros'] . '&titulo_livro=' . $linha['titulo_livro'] . '&editora=' . $linha['editora'] . '&categoria=' . $linha['categoria'] . '&numero_paginas=' . $linha['numero_paginas'] . '&ano=' . $linha['ano'] . '"><i class="fa fa-refresh w3-large w3-text-black""></i></a></td></td>';

                echo '</tr>';
                }
                echo '
                    </table>
                    <br>
                </div>';
                $conexao->close();
                

  ?>

</body>
</html>