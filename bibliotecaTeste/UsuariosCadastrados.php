<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>usuarios cadastrados</title>
    <?php require_once('htmlUsuariosCadastrados.php'); ?>
    <?php
    echo '
            <a href="gerente_dashboard.php" class="w3-display-topleft">
                <i class="fa fa-arrow-circle-left w3-large w3-black w3-button w3-xxlarge"></i>     
            </a> 
            ';
    require_once 'conexaoBD.php';
    echo '
    <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin">
    <h1 class="w3-center w3-black w3-round-large w3-margin">Usuário Cadastrado</h1>
    <table class="w3-table-all w3-centered">
    <thead>   
                    <tr class="w3-center w3-black">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>cpf</th>
                        <th>Senha</th>
                        <th>Excluir</th>
                        <th>Atualizar</th>
                    </tr>
                <thead>
                ';
    $sql = "SELECT * FROM cadastro";
    $resultado = $conexao->query($sql);
    if ($resultado != null)
        foreach ($resultado as $linha) {
            echo '<tr>';
            echo '<td>' . $linha['idcadastro'] . '</td>';
            echo '<td>' . $linha['nome'] . '</td>';
            echo '<td>' . $linha['email'] . '</td>';
            echo '<td>' . $linha['telefone'] . '</td>';
            echo '<td>' . $linha['cpf'] . '</td>';
            echo '<td>' . $linha['senha'] . '</td>';


            echo '<td><a href="ExcluirCadastro.php?id=' . $linha['idcadastro'] . '&nome=' . $linha['nome'] . '&telefone=' . $linha['telefone'] . '&email=' . $linha['email'] . '&cpf=' . $linha['cpf'] . '&senha=' . $linha['senha'] . '"<i class="fa fa-user-times w3-large w3-text-black"></i> </a></td></td>';
            echo '<td><a href="AtualizarCadastro.php?id=' . $linha['idcadastro'] . '&nome=' . $linha['nome'] . '&telefone=' . $linha['telefone'] . '&email=' . $linha['email'] . '&cpf=' . $linha['cpf'] . '&senha=' . $linha['senha'] . '"><i class="fa fa-refresh w3-large w3-text-black""></i></a></td></td>';
            echo '</tr>';
        }
    echo '
                    </table>
                </div>';
    $conexao->close();
    ?>
    </div>
    ?>