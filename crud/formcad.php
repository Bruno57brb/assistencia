<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos CSS personalizados -->
    <link href="../css/cadastraR.css" rel="stylesheet">

    <!-- JavaScript -->
    <script src="../java/login.js" defer></script>
</head>
<body>
    <header>
        <!-- Header content (se necessário) -->
    </header>

    <main class="container mt-5">
        <form class="form-signin" action="cadastrar.php" method="POST">
            <h1 class="h3 mb-3 font-weight-normal">Cadastrar-se</h1>

            <div class="form-group">
                <label for="Nome" class="sr-only">Nome</label>
                <input type="text" id="Nome" name="Nome" class="form-control" placeholder="Nome" required autofocus>
            </div>

            <div class="form-group">
                <label for="SIAPE" class="sr-only">SIAPE</label>
                <input type="text" id="SIAPE" name="SIAPE" class="form-control" placeholder="SIAPE" required>
            </div>

            <div class="form-group">
                <label for="Email" class="sr-only">Email</label>
                <input type="email" id="Email" name="Email" class="form-control" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label for="Senha" class="sr-only">Senha</label>
                <input type="password" id="Senha" name="Senha" class="form-control" placeholder="Senha" required>
            </div>

            <div class="form-group">
                <label for="Perfil" class="form-label">Categoria</label>
                <select id="Perfil" name="Perfil" class="form-control" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Nutricionista</option>
                    <option value="2">Psicóloga</option>
                    <option value="3">Enfermeira</option>
                    <option value="4">Coordenação</option>
                </select>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button> 
            <a class="btn btn-lg btn-secondary btn-block" href="../index.php">Entrar</a>
        </form>
    </main>

    <footer>
        <!-- Footer content (se necessário) -->
    </footer>
</body>
</html>
