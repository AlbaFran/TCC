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
session_start();
include('conexaoBD.php'); // Arquivo para conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM cadastro WHERE email = '$email'";
    $result = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($result);

    if ($senha == $usuario['senha']) {  // Comparação direta (sem password_verify)
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];

        // Redireciona para a página apropriada com base no tipo de usuário
        if ($usuario['tipo_usuario'] == 'gerente') {
            header("Location: gerente_dashboard.php");
        } elseif ($usuario['tipo_usuario'] == 'bibliotecario') {
            header("Location: bibliotecario_dashboard.php");
        } else {
            header("Location: usuario_dashboard.php");
        }
        exit;
    } else {
        header("Location: erro.php");

    }
}
?>
