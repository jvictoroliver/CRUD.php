<?php
session_start();
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta SQL para verificar o usuário com base no nome de usuário (email)
    $query = "SELECT * FROM tbl_usuario WHERE usuario_email = ?";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row['cadastro_password'];

        if (password_verify($password, $stored_password)) {
            // Senha válida, o usuário está autenticado com sucesso
            $_SESSION['username'] = $username;
            header("Location: home.php"); // Redirecionar para a página de home após o login
            exit();
        } else {
            $error_message = "Senha incorreta. Tente novamente.";
        }
    } else {
        $error_message = "Nome de usuário (email) não encontrado. Verifique se o email está correto ou registre-se.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-container">
        <h2 class="mb-4">Login</h2>
        <?php
        if (isset($error_message)) {
            echo '<p class="text-danger">' . $error_message . '</p>';
        }
        ?>
        <form method="post">
            <div class="form-group">
                <label for="username">Email</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <p class="mt-3 create-account">Não tem conta? <a href="cadastro.php">Crie uma!</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>