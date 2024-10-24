<?php session_start();
$login = "";
if (isset($_SESSION['login'])) {
  $login = $_SESSION['login'];
  unset($_SESSION['login']);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" defer></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Painel de Administração</title>
</head>

<?php include_once "header.php"; ?>

<style>
  .card-content i {
    font-size: 48px;
    color: white;
  }

  .card-content h5 {
    margin-top: 0;
    color: white;
  }

  .card-action {
    text-align: center;
    padding-bottom: 10px;
  }
  .card-action {
  text-align: center;
  padding-bottom: 10px;
  transition: all 0.3s ease; /* Transição suave */
}

.card-action:hover {
  transform: translateY(-5px); /* Levanta o card */
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Adiciona uma sombra mais forte */
  background-color: none; /* Remove o fundo preto */
}

.custom-card {
  transition: all 0.3s ease; /* Transição suave para o card */
}

.custom-card:hover {
  transform: scale(1.05); /* Aumenta levemente o card */
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Sombra mais visível */
}


  .custom-card {
    height: 200px;
  }
</style>

<body class="white">
  <div class="container center-align">
    <h1>Bem-vindo ao Painel de Administração do IFFar</h1>
    <div class="row">
      <?php if ($_SESSION['Perfil'] == 1 or $_SESSION['Perfil'] == 2) { ?>
        <div class="col s12 m6 l4">
          <div class="card blue darken-2 custom-card">
            <div class="card-content white-text">
              <i class="fas fa-sign-in-alt"></i>
              <h5>Entrada</h5>
            </div>
            <div class="card-action">
              <a href="#" class="white-text">Acessar</a>
            </div>
          </div>
        </div>
      <?php } ?>

      <div class="col s12 m6 l4">
        <div class="card pink darken-2 custom-card">
          <div class="card-content white-text">
            <i class="fas fa-sign-out-alt"></i>
            <h5>Saída</h5>
          </div>
          <div class="card-action">
            <a href="#" class="white-text">Acessar</a>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card orange darken-2 custom-card">
          <div class="card-content white-text">
            <i class="fas fa-file-alt"></i>
            <h5>Relatório</h5>
          </div>
          <div class="card-action">
            <a href="#" class="white-text">Acessar</a>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card grey darken-2 custom-card">
          <div class="card-content white-text">
            <i class="fas fa-calendar-alt"></i>
            <h5>Agendamentos</h5>
          </div>
          <div class="card-action">
            <a href="#" class="white-text">Acessar</a>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card green darken-2 custom-card">
          <div class="card-content white-text">
            <i class="fas fa-user-graduate"></i>
            <h5>Alunos</h5>
          </div>
          <div class="card-action">
            <a href="#" class="white-text">Acessar</a>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card cyan darken-2 custom-card">
          <div class="card-content white-text">
            <i class="fas fa-search"></i>
            <h5>Consulta</h5>
          </div>
          <div class="card-action">
            <a href="#" class="white-text">Acessar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

<script>
  <?php if ($login != "") { ?>
    window.addEventListener("load", (event) => {
      Swal.fire(
        <?= json_encode($login) ?>
      )
    })
  <?php } ?>
</script>
