<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Excluir Cadastro</title>
<?php require_once('htmlUsuariosCadastrados.php'); ?>
<a href="UsuariosCadastrados.php" class="w3-display-topmiddle w3-red w3-center w3-padding w3-button" style="text-decoration:none; ">
    <i class="fa fa-ban" style="font-size:5em"></i>
    <p style="font-weight:bold;">CANCELAR EXCLUSÃO</p>     
</a> 
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
    <h1 class="w3-center w3-black w3-round-large w3-margin">EXLUIR CADASTRO - ID: <?php echo " ".$_GET['id']?> </h1>
    <form action="ExcluirActionBD.php" class="w3-container w" method='post'>
    <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id']?>">
        <br>
        <label class="w3-text-white w3-padding" style="font-weight: bold; background-color: black; display: inline-block; width: 20%; padding: 10px;">Nome</label>
        <input name="txtNome" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['nome']?>">
        <br>
        <label class="w3-text-white w3-padding" style="font-weight: bold; background-color: black; display: inline-block; width: 20%; padding: 10px;">Telefone</label>
        <input name="txtTelefone" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['telefone']?>">
        <br>
        <label class="w3-text-white w3-padding" style="font-weight: bold; background-color: black; display: inline-block; width: 20%; padding: 10px;">Email</label>
        <input name="txtEmail" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['email']?>">
        <br>
        <label class="w3-text-white w3-padding" style="font-weight: bold; background-color: black; display: inline-block; width: 20%; padding: 10px;">CPF</label>
        <input name="txtCPF" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['cpf']?>">
        <br>
        <label class="w3-text-white w3-padding" style="font-weight: bold; background-color: black; display: inline-block; width: 20%; padding: 10px;">Senha</label>
        <input name="txtSenha" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['senha']?>">
        <br>
        <button name="btnExcuir" class="w3-button w3-black w3-cell w3-round-large w3-right">     
            <i class="w3-xxlarge fa fa-check"></i> Confirmar Exclusão.
        </button>
    </form>
</div>