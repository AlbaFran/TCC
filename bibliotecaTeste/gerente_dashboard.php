<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/gerente.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
    <title>Página do Gerente</title>
</head>

<body>

    <header>
        <h1>
            Olá, seja bem vindo Gerente!
        </h1>

        <div class="btn-sair">
            <a href="index.php"><img class="btn-sair" src="./img/sair.png" alt="botao sair"></a>
        </div>

    </header>



    <div class="container">

        
        <div class="conteiner">
            <!-- Botão para ir para Usuários abaixo da mensagem -->
            <button class="btn-cadastro">
                <a href="UsuariosCadastrados.php" class="">Gerenciamento de Cadastros</a>
            </button>
            <br>
            <!-- Botão para Acerto de Livros abaixo do botão de Usuários -->
            <button class="btn-acervo">
                <a href="AcervoDeLivros.php" class="">Gerenciamento de Livros</a>

            </button>
        </div>
    </div>

</body>

</html>


