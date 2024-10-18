<!DOCTYPE html>
<html lang="pt-br">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/ExcluirLivros.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Excluir Livros</title>

  echo '
  <a href="AcervoDeLivros.php" class="w3-display-topleft">
      <i class="fa fa-arrow-circle-left w3-large w3-black w3-button w3-xxlarge"></i>     
  </a> 
  
  <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle" >
  <h1 class="w3-center w3-black w3-round-large w3-margin">EXLUIR LIVROS - ID: <?php echo " ".$_GET['id']?> </h1>
    <form action="ExcluirLivrosActionBD.php" class="w3-container w" method='post'>
    <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id']?>">
    <br>
        <label class="w3-text-white w3-padding" style="font-weight: bold; background-color: black; display: inline-block; width: 20%; padding: 10px;">Livro</label>
        <input name="txtLivro" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['titulo_livro']?>">
        <br>

        <label class="w3-text-white w3-padding" style="font-weight: bold; background-color: black; display: inline-block; width: 20%; padding: 10px;">Editora</label>
        <input name="txtEditora" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['editora']?>">
        <br> 

        <label class="w3-text-white w3-padding" style="font-weight: bold; background-color: black; display: inline-block; width: 25%; padding: 10px;">Categoria</label>
        <input name="txtCategoria" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['categoria']?>">
        <br>

        <label class="w3-text-white w3-padding" style="font-weight: bold; background-color: black; display: inline-block; width: 20%; padding: 10px;">Paginas</label>
        <input name="txtPaginas" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['numero_paginas']?>">
        <br>

        <label class="w3-text-white w3-padding" style="font-weight: bold; background-color: black; display: inline-block; width: 20%; padding: 10px;">Ano</label>
        <input name="txtAno" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['ano']?>">
        <br>

        <button name="btnExcuir" class="w3-button w3-black w3-cell w3-round-large w3-right">     
        <i class="w3-xxlarge fa fa-check"></i> Confirmar Exclusão.
    </button>
</form>

  </div>;

  
</body>
</html>