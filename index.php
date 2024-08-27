<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.rtl.min.css" rel="stylesheet">

    <title>Cadastro</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
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

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");
                switch (@$_REQUEST["page"]) { /* Aqui, o código verifica o valor de $_REQUEST["page"], que é uma variável que pode receber valores de formulários enviados por métodos GET ou POST. O @ antes de $_REQUEST é usado para suprimir erros caso a variável não esteja definida. A estrutura switch é usada para comparar esse valor com diferentes casos. */
                    case "novo"; /* Este é o primeiro caso que o switch verifica. Se o valor de $_REQUEST["page"] for igual a "novo", o código dentro deste caso será executado. */
                        include("novo-usuario.php"); /* Se o valor de $_REQUEST["page"] for "novo", o arquivo novo-usuario.php será incluído e executado. Isso permite que você modularize seu código, dividindo-o em vários arquivos. */
                        break; /* Este comando diz ao switch para parar de verificar outros casos, pois já encontrou uma correspondência. */
                    case "listar"; /* Este é o segundo caso. Se o valor de $_REQUEST["page"] for "listar", o código dentro deste caso será executado. */
                        include("listar-usuario.php"); /* Se o valor de $_REQUEST["page"] for "listar", o arquivo listar-usuario.php será incluído e executado. */
                        break; /* Como no primeiro caso, este break impede que outros casos sejam verificados. */
                        case "salvar":
                            include ("salvar-usuario.php");
                            break;
                            case "editar":
                                include ("editar-usuario.php");
                                break;
                        default; /* Este é o caso padrão. Se $_REQUEST["page"] não for "novo" nem "listar", o código dentro do default será executado. */
                        echo "<h1>Bem vindos!</h1>"; /* Se nenhum dos casos anteriores corresponder, esta linha será executada e mostrará a mensagem "Bem vindos!" na tela. */
                } /* Resumindo, esse código escolhe qual arquivo incluir e executar com base no valor da variável $_REQUEST["page"]. Se a variável não corresponder a nenhum dos casos, ele exibe uma mensagem padrão. */
                ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>