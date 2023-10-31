<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrosalvar':
        $nome = $_POST["cadastro_nome"];
        $sobrenome = $_POST["cadastro_sobrenome"];
        $email = $_POST["cadastro_email"];
        $celular = $_POST["cadastro_celular"];
        $senha = $_POST["cadastro_password"];
        $datanasc = $_POST["cadastro_data_nasc"];

        $sql = "INSERT INTO tbl_usuario (cadastro_nome, cadastro_sobrenome, cadastro_email, cadastro_celular, cadastro_password, cadastro_data_nasc) 
            VALUES ('{$nome}', '{$sobrenome}', '{$email}', '{$celular}', '{$senha}', '{$datanasc}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='index.php'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='index.php'</script>";
        }

        break;
}
?>