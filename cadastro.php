<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head> 

<body>
    <form action="?page=cadastrosalvar" method="POST">
    <div class="cadastro-container">
        <h2>Cadastro</h2>
        <form>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="cadastro_nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="cadastro_sobrenome" placeholder="Digite seu sobrenome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="cadastro_email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="tel" class="form-control" id="celular" name="cadastro_celular" placeholder="Digite seu número de celular" required>
            </div>
            <div class="form-group">
                <label for="senha">Criar Senha</label>
                <input type="password" class="form-control" id="senha" name="cadastro_senha" placeholder="Digite sua senha" required>
            </div>
            <div class="form-group">
                <label for="confirmar-senha">Confirmar Senha</label>
                <input type="password" class="form-control" id="confirmar-senha" name="cadastro_senha" placeholder="Confirme sua senha"
                    required>
            </div>
            <div class="form-group">
                <label for="data-nascimento">Data de Nascimento</label>
                <input type="date" class="form-control" id="data-nascimento" name="cadastro_data_nasc" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <div class="login-link mt-3">Já possui uma conta? <a href="index.php">Clique aqui!</a></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </form>
</body>

</html>


