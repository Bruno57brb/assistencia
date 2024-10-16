<?php
// Conectar ao banco de dados
require_once "../../function/conexao.php";
$conexao = conectar();

// Consulta SQL para selecionar todos os usuários
$sql = "SELECT * FROM usuario";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);  

// Fechar a conexão
mysqli_close($conexao);
?>

<nav>
  <div class="navbar">
    <div class="logo">
      <img src="img/bruno.png" alt="Logo">
      <!-- Exibe o nome do usuário -->
      <h1><?php echo $row['nome']; ?></h1>
    </div>
    <ul>

    <li><a href="#" class="nav-link">
          <i class="fab fa-dochub"></i>
          <span class="nav-item">cadastro do aluno</span>
        </a></li>
      <li><a href="#" class="nav-link">
          <i class="fab fa-dochub"></i>
          <span class="nav-item">relatorio</span>
        </a></li>
        <li><a href="#" class="nav-link">
          <i class="fas fa-cog"></i>
          <span class="nav-item">entrada/saida</span>
        </a></li>
      <li><a href="#" class="nav-link">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>

      <li><a href="logout.php" class="nav-link logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Logout</span>
        </a></li>
    </ul>
  </div>
</nav>

<style>
/* Ajustes gerais no menu */
nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 280px;
  height: 100vh;
  background: #39a046;  /* Cor de fundo verde */
  color: white;
  padding: 20px 0;
}

/* Logo */
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

/* Lista de itens */
ul {
  padding-left: 0;
}

li {
  margin-bottom: 2rem;
}

/* Efeito inicial dos links */
li a {
  display: flex;
  align-items: center;
  font-size: 16px;
  color: rgb(200, 200, 200);
  padding: 10px 20px;
  border-radius: 8px;
  transition: all 0.3s ease;  /* Transição suave */
  position: relative;
  overflow: hidden;  /* Evita que a animação ultrapasse os limites */
}

/* Animação de deslizamento e efeito de hover */
li a:hover {
  background-color: #444;  /* Cor de fundo ao passar o mouse */
  color: white;  /* Cor do texto ao passar o mouse */
  transform: translateX(10px);  /* Desloca o item 10px para a direita */
}

li a i {
  margin-right: 15px;
  transition: transform 0.3s ease;  /* Transição suave para o ícone */
}

/* Efeito no ícone quando passar o mouse */
li a:hover i {
  transform: translateX(10px);  /* Move o ícone junto com o texto */
}

/* Estilo para o item ativo */
.nav-link.active {
  background-color: 0;  /* Cor de fundo do item ativo */
  color: white;
}

.nav-link.active i {
  color: white;  /* Cor do ícone ativo */
}

/* Estilo para o link de logout */
.logout {
  position: absolute;
  bottom: 20px;
  width: 100%;
}

.logout a {
  color: rgb(255, 99, 71);  /* Cor vermelha para o logout */
  font-size: 16px;
  display: flex;
  align-items: center;
  padding: 10px 20px;
  border-radius: 8px;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.logout a:hover {
  background-color: #444;  /* Efeito hover para o logout */
  color: white;
}

</style>

<script>
  // Seleciona todos os links de navegação
  const navLinks = document.querySelectorAll('.nav-link');

  // Verifica a URL e ativa o item correto
  window.addEventListener('DOMContentLoaded', function() {
    navLinks.forEach(link => {
      if (link.href === window.location.href) {
        link.classList.add('active');
      }
    });
  });
</script>
