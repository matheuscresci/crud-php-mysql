<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Definição do tipo de documento HTML5 -->
    <!-- Configurações necessárias de meta tags -->
    <meta charset="utf-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Configura a viewport para que a página seja responsiva -->

    <!-- Importa o arquivo CSS do Bootstrap -->
    <link href="css/bootstrap.rtl.min.css" rel="stylesheet">

    <!-- Título da página que aparece na aba do navegador -->
    <title>Cadastro</title>
</head>

<body>
    <!-- Criação da barra de navegação (navbar) usando Bootstrap -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- Link que funciona como marca ou título da navbar -->
            <a class="navbar-brand" href="#">Cadastro</a>
            <!-- Botão para alternar a visualização da navbar em dispositivos móveis -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Div que contém os links de navegação e que pode ser colapsada em dispositivos móveis -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Cada item de navegação dentro da navbar -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Novo Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar Usuário</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container principal para o conteúdo da página -->
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <!-- Início do código PHP para inclusão de conteúdo dinâmico -->
                <?php
                // Inclui o arquivo de configuração do sistema
                include("config.php");

                // Switch que verifica o valor do parâmetro "page" na URL
                switch (@$_REQUEST["page"]) {
                    // Caso "novo", inclui o arquivo "novo-usuario.php"
                    case "novo";
                        include("novo-usuario.php");
                        break;
                    // Caso "listar", inclui o arquivo "listar-usuario.php"
                    case "listar";
                        include("listar-usuario.php");
                        break;
                    // Caso "salvar", inclui o arquivo "salvar-usuario.php"
                    case "salvar":
                        include ("salvar-usuario.php");
                        break;
                    // Caso "editar", inclui o arquivo "editar-usuario.php"
                    case "editar":
                        include ("editar-usuario.php");
                        break;
                    // Caso não haja correspondência, exibe uma mensagem de boas-vindas
                    default;
                        echo "<h1>Bem vindos!</h1>"; 
                } 
                ?>
            </div>
        </div>
    </div>

    <!-- Importa o arquivo JavaScript do Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
