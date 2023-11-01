<?php
require_once('config.php');

switch ($_REQUEST["acao"]) {
    case 'cadastro-salvar.php':
        $nome = $_POST["cadastro_nome"];
        $sobrenome = $_POST["cadastro_sobrenome"];
        $email = $_POST["cadastro_email"];
        $celular = $_POST["cadastro_celular"];
        $senha = $_POST["cadastro_senha"];
        $datanasc = $_POST["cadastro_data_nasc"];

        // Use a função password_hash para criar uma hash segura da senha
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        // Prepare a declaração SQL
        $sql = "INSERT INTO tbl_usuario (usuario_nome, usuario_sobrenome, usuario_email, usuario_celular, usuario_password, usuario_data_nasc) 
                VALUES ('{$nome}', '{$sobrenome}', '{$email}', '{$celular}', '{$senha}', '{$datanasc}')";

        // Prepare a consulta
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Vincule os parâmetros
            $stmt->bind_param("ssssss", $nome, $sobrenome, $email, $celular, $senha_hash, $datanasc);

            // Execute a consulta
            if ($stmt->execute()) {
                echo "Cadastro realizado com sucesso!";
            } else {
                echo "Erro ao cadastrar: " . $stmt->error;
            }

            // Feche a consulta
            $stmt->close();
        } else {
            echo "Erro na preparação da consulta: " . $conn->error;
        }

        break;
}
?>
