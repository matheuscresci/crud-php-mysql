<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>alert('Cadastrado com sucesso');</script>";
            echo "<script>location.href='?page=listar'</script>";
        } else {
            echo "<script>alert('Não foi possível cadastrar');</script>";
            echo "<script>location.href='?page=listar'</script>";
        }
        break;
    case 'editar':
        //code ..
        break;
    case 'excluir':
        //code ..
        break;
}
