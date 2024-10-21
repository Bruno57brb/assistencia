<?php
// Conectar ao banco de dados
require_once "conexao.php";
$conexao = conectar();

// Consulta SQL para selecionar todos os usuários
$sql = "SELECT * FROM usuario";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

// Fechar a conexão
mysqli_close($conexao);
?>

<link rel="stylesheet" href="css/materialize.css">

<!-- Barra de navegação superior -->
<nav class="green">
  <div class="nav-wrapper">
    <!-- Botão de Hambúrguer/Seta -->
    <div class="toggle-btn" id="toggleBtn" onclick="toggleSidebar()">
      &#9776; <!-- Ícone de três barras inicialmente -->
    </div>

    <!-- Nome do usuário e imagem -->
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li>
        <span><?= $row['nome']; ?></span>
        <img class="circle responsive-img" src="img/bruno.png" alt="User Logo" width="40px" height="auto">
      </li>
    </ul>
  </div>
</nav>

<!-- Sidebar (menu lateral) -->
<nav id="sidebar">
  <div class="navbar">
    <div class="logo">
      <img src="img/bruno.png" alt="Logo">
      <h1><?php echo $row['nome']; ?></h1>
    </div>
    <ul>
      <li><a href="#" class="nav-link">
          <i class="fab fa-dochub"></i>
          <span class="nav-item">Cadastro do Aluno</span>
        </a></li>
      <li><a href="#" class="nav-link">
          <i class="fab fa-dochub"></i>
          <span class="nav-item">Relatório</span>
        </a></li>
    
      <li><a href="#" class="nav-link">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Configurações</span>
        </a></li>
      <li><a href="logout.php" class="nav-link logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Logout</span>
        </a></li>
    </ul>
  </div>
</nav>

<style>
  .nav-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .toggle-btn {
    font-size: 30px;
    cursor: pointer;
    padding: 15px;
    background: none;
    color: white;
    transition: all 0.3s ease;
    position: relative;
    z-index: 1000;
  }

  #sidebar {
    position: fixed;
    top: 0;
    left: -280px;
    width: 280px;
    height: 100vh;
    background: #39a046;
    color: white;
    padding: 20px 0;
    transition: left 0.3s ease;
  }

  .logo {
    display: flex;
    align-items: center;
    padding-bottom: 2rem;
  }

  .logo img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }

  .logo h1 {
    margin-left: 1rem;
    font-size: 18px;
    text-transform: uppercase;
    color: white;
  }

  ul {
    padding-left: 0;
  }

  li {
    margin-bottom: 2rem;
  }

  li a {
    display: flex;
    align-items: center;
    font-size: 16px;
    color: rgb(200, 200, 200);
    padding: 10px 20px;
    border-radius: 8px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  li a:hover {
    background-color: #444;
    color: white;
    transform: translateX(10px);
  }

  li a i {
    margin-right: 15px;
    transition: transform 0.3s ease;
  }

  li a:hover i {
    transform: translateX(10px);
  }

  .logout {
    position: absolute;
    bottom: 20px;
    width: 100%;
  }

  .logout a {
    color: rgb(255, 99, 71);
    font-size: 16px;
    display: flex;
    align-items: center;
    padding: 10px 20px;
    border-radius: 8px;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .logout a:hover {
    background-color: #444;
    color: white;
  }
</style>

<script>
  // Função para alternar a visibilidade da sidebar
  function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleBtn');

    if (sidebar.style.left === '0px') {
      sidebar.style.left = '-280px'; // Fecha a sidebar
      toggleBtn.innerHTML = '&#9776;'; // Volta para ícone de hambúrguer
      toggleBtn.style.left = '15px'; // Reposiciona o botão para a esquerda
    } else {
      sidebar.style.left = '0px'; // Abre a sidebar
      toggleBtn.innerHTML = '&#8592;'; // Muda para ícone de seta
      toggleBtn.style.left = '300px'; // Reposiciona o botão após a sidebar
    }
  }
</script>
