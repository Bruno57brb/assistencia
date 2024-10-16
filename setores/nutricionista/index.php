<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nutricionista</title>
  <link rel="stylesheet" href="css/style.css" />
  <!-- Font Awesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
 
</head>
<body>
  <div class="container">
   <!-- Inclui o header da página -->
   <?php include "header.php"?>

 

    <!-- Conteúdo principal -->
    <section class="main">
      <div class="main-top">
        <img src="img/iff2.jpg" height="130px" width="500px">
      </div>
      <div class="main-body">
        <h1>Nutricionista</h1>
      
        <div class="search_bar">
          <!-- Formulário de Pesquisa -->
          <form action="" method="GET">
           
          </form>
        </div>

        <div class="tags_bar">
          <div class="row">

          <style>
    /* Estilo para a caixa de anúncios */
    .ads-box {
      background-color: white; /* Fundo branco */
      border: 2px solid #ccc; /* Bordas cinza claro */
      border-radius: 8px; /* Bordas arredondadas */
      width: 100%; /* Largura total */
      padding: 200px; /* Espaçamento interno */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
      margin-bottom: 20px; /* Espaçamento abaixo da caixa */
      text-align:end; /* Centralizar o conteúdo */
    }
    
    /* Estilo adicional para o texto de exemplo */
    .ads-box h2 {
      margin: 10;
      font-size: 24px;
      color: #333; /* Cor do texto */
    }
  </style>

     <!-- Caixa de anúncios -->
     <div class="ads-box">
      <h2>Anúncios Aqui</h2>
      <p>noticias.</p>
    </div>
            <!-- PHP para Buscar Jobs no Banco de Dados -->
            <?php
            // Conectar ao banco de dados
            require_once "../../function/conexao.php";
            $conexao = conectar();
            // Definir variáveis de pesquisa



            
            ?>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>
