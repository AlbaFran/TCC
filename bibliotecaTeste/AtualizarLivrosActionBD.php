<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Atualizado com Sucesso</title>
<?php require_once('htmlUsuariosCadastrados.php'); ?>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" >
    <?php
       require_once 'conexaoBD.php';
      
        $sql = "UPDATE livros SET titulo_livro = '".$_POST['txtLivro']."', 
        categoria='".$_POST['txtCategoria']."', numero_paginas = '".$_POST['txtPaginas']."', ano = '".$_POST['txtAno']."' WHERE idlivros =". $_POST['txtID'].";";
     
        if ($conexao->query($sql) === TRUE) {
            echo '
            <a href="AcervoDeLivros.php">
                <h1 class="w3-button w3-black">Cadastro Atualizado com sucesso! </h1>
            </a> 
            ';
        $id = mysqli_insert_id($conexao);
            
        } else {
            echo '
            <a href="AcervoDeLivros.php">
                <h1 class="w3-button w3-black">ERRO! </h1>
            </a> 
            ';
        }
        $conexao->close();
    ?>
</div>