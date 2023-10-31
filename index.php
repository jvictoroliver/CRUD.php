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
    <form>
      <div class="form-group">
        <label for="username">Email</label>
        <input type="text" class="form-control" id="username" placeholder="Digite seu email" required>
      </div>
      <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
      </div>
      <button type="submit" class="btn btn-primary" href="home.php">Entrar</button>
    </form>
    <p class="mt-3 create-account">Não tem conta? <a href="cadastro.php">Crie uma!</a></p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
