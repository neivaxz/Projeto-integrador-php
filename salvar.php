<?php
require("config.php");

switch($_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $conn->real_escape_string($_POST["nome"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $mensagem = $conn->real_escape_string($_POST["mensagem"]);

        $sql = "INSERT INTO sugestao (NOME, EMAIL, MENSAGEM)
                VALUES ('$nome', '$email', '$mensagem')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Cadastrado com sucesso!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível cadastrar!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'editar':
        $id = intval($_POST["id"]);
        $nome = $conn->real_escape_string($_POST["nome"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $mensagem = $conn->real_escape_string($_POST["mensagem"]);

        $sql = "UPDATE sugestao SET nome='$nome', email='$email', mensagem='$mensagem' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Atualizado com sucesso!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível atualizar!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'excluir':
        $id = intval($_REQUEST["id"]);

        $sql = "DELETE FROM sugestao WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Excluído com sucesso!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível excluir!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;
}
?>