<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <link rel="shortcut icon" href="img/user.png">
  <link rel="stylesheet" href="css/login.css">
  <img id="olho" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABDUlEQVQ4jd2SvW3DMBBGbwQVKlyo4BGC4FKFS4+TATKCNxAggkeoSpHSRQbwAB7AA7hQoUKFLH6E2qQQHfgHdpo0yQHX8T3exyPR/ytlQ8kOhgV7FvSx9+xglA3lM3DBgh0LPn/onbJhcQ0bv2SHlgVgQa/suFHVkCg7bm5gzB2OyvjlDFdDcoa19etZMN8Qp7oUDPEM2KFV1ZAQO2zPMBERO7Ra4JQNpRa4K4FDS0R0IdneCbQLb4/zh/c7QdH4NL40tPXrovFpjHQr6PJ6yr5hQV80PiUiIm1OKxZ0LICS8TWvpyyOf2DBQQtcXk8Zi3+JcKfNafVsjZ0WfGgJlZZQxZjdwzX+ykf6u/UF0Fwo5Apfcq8AAAAASUVORK5CYII="/>
  <title>LOGIN</title>
</head>

<body>
  <header></header>

  <div class="iff">
    <img src="img/iff.jpg" alt="logo">
  </div>

  <form action="login.php" method="POST">
    <h1>LOGIN</h1>
    <label for="SIAPE">SIAPE:</label>
    <input type="text" name="SIAPE">
    <label for="SIAPE">SENHA:</label>
    <input type="password" id="senha" name="senha">
    <button >Logar</button>
  </form>

  <footer></footer>
  <script>
        var senha = $('#senha');
        var olho = $("#olho");

        olho.mousedown(function () {
            senha.attr("type", "text");
        });

        olho.mouseup(function () {
            senha.attr("type", "password");
        });
        // para evitar o problema de arrastar a imagem e a senha continuar exposta, 
        //citada pelo nosso amigo nos comentários
        $("#olho").mouseout(function () {
            $("#senha").attr("type", "password");
        });
        
            </script>
</body>

</html>