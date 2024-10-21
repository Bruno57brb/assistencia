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
  .btn-large {
    min-width: 200px;
    min-height: 100px;
    /* Adjust button width */
    padding: 16px;
    /* Increase padding for larger button */
  }

  .button-spacing {
    margin-bottom: 20px;
  }
</style>

<body class="white">
  <div class="container center-align">
    <h1>Bem-vindo ao Painel de Administração do IFFar</h1>
    <div class="row">
      <?php if($_SESSION['Perfil'] == 1 or $_SESSION['Perfil'] == 2){ ?>
      <div class="col s12 m6 l4 button-spacing">
        <button class="waves-effect waves-light btn blue darken-2 btn-large">Entrada</button>
      </div>
    <?php } ?>
      <div class="col s12 m6 l4 button-spacing">
        <button class="waves-effect waves-light btn pink darken-2 btn-large">Saída</button>
      </div>
      <div class="col s12 m6 l4 button-spacing">
        <button class="waves-effect waves-light btn orange darken-2 btn-large">Relatório</button>
      </div>
      <div class="col s12 m6 l4 button-spacing">
        <button class="waves-effect waves-light btn grey darken-2 btn-large">Agendamentos</button>
      </div>
      <div class="col s12 m6 l4 button-spacing">
        <button class="waves-effect waves-light btn green darken-2 btn-large">Alunos</button>
      </div>
      <div class="col s12 m6 l4 button-spacing">
        <button class="waves-effect waves-light btn cyan darken-2 btn-large">Consulta</button>
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