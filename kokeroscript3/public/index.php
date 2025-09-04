<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loja Online</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

  

  <!-- Navbar com fundo verde -->
<nav class="navbar navbar-expand-lg" style="background-color:#014d00;">
  <div class="container-fluid align-items-center">

    <!-- Logo à esquerda -->
    <a class="navbar-brand" href="index.html">
      <img src="img/logo.png" alt="Logo" style="height: 80px; width:auto;">
    </a>

    <!-- Botão hambúrguer para mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon" style="color:#fff;"></span>
    </button>

    <!-- Conteúdo da navbar -->
    <div class="collapse navbar-collapse" id="navbarContent">
      
      <!-- Links principais centralizados -->
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="index.html">Início</a></li>
        <li class="nav-item"><a class="nav-link" href="produtos.html">Produtos</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu" role="button" data-bs-toggle="dropdown">
            Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
            <li><a class="dropdown-item" href="eletronicos.html">Eletrônicos</a></li>
            <li><a class="dropdown-item" href="roupas.html">Roupas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="promocoes.html">Promoções</a></li>
          </ul>
        </li>
      </ul>
      <!-- Barra de pesquisa e links à direita -->
      <form class="d-flex me-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar produtos..." aria-label="Search">
        <button class="btn btn-dark" type="submit">Buscar</button>
      </form>


      <ul class="navbar-nav d-flex flex-row">
        <li class="nav-item me-3">
          <a class="nav-link" href="minha-conta.html">Minha Conta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="carrinho.html">Carrinho <span class="badge bg-danger">0</span></a>
        </li>
      </ul>

    </div>
  </div>
</nav>


  <!-- Carrossel -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carosel1.png" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="img/carosel2.png" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="img/carosel2.png" class="d-block w-100" alt="Slide 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!-- Produtos -->
<div class="container text-center produtos">

  <!-- Linha antes da primeira fileira -->
  <hr class="linha-produtos">

  <!-- Primeira fileira -->
  <div class="row g-4">
    <div class="col-md-4">
      <img src="img/foto.png" alt="Produto 1">
      <p>Camiseta Foda</p>
    </div>
    <div class="col-md-4">
      <img src="img/foto.png" alt="Produto 2">
      <p>Blazer Elegante</p>
    </div>
    <div class="col-md-4">
      <img src="img/foto.png" alt="Produto 3">
      <p>Blazer Moderno</p>
    </div>
  </div>

  <!-- Linha entre as fileiras -->
  <hr class="linha-produtos">

  <!-- Segunda fileira -->
  <div class="row g-4 mt-4">
    <div class="col-md-4">
      <img src="img/foto.png" alt="Produto 4">
      <p>Jaqueta Jeans</p>
    </div>
    <div class="col-md-4">
      <img src="img/foto.png" alt="Produto 5">
      <p>Casaco Vintage</p>
    </div>
    <div class="col-md-4">
      <img src="img/foto.png" alt="Produto 6">
      <p>Casaco Cinza</p>
    </div>
  </div>

  <!-- Linha depois da última fileira -->
  <hr class="linha-produtos">

</div>





  <!-- Footer -->
<!-- Footer inspirado no modelo -->
<footer>
  <div class="footer-container container d-flex justify-content-between align-items-start flex-wrap">
    
    <!-- Redes sociais -->
<div class="footer-social">
  <h5>Siga-nos:</h5>
  <p>
    <img src="img/instagram.png" alt="Instagram" class="social-icon">
    <a href="https://www.instagram.com/brechokokero" target="_blank">@brechokokero</a>
  </p>
  <p>
    <img src="img/whatsapp.png" alt="WhatsApp" class="social-icon">
    <a href="https://wa.me/5511992424158" target="_blank">+55 11 99242-4158</a>
  </p>
</div>


    <!-- Links -->
    <div class="footer-links">
      <h5>Links</h5>
      <ul>
        <li><a href="index.html">Início</a></li>
        <li><a href="produtos.html">Produtos</a></li>
        <li><a href="perguntas.html">Perguntas Frequentes</a></li>
      </ul>
    </div>

    <!-- Logo -->
    <div class="footer-logo">
      <img src="img/logo.png" alt="Logo" class="logo-footer">
    </div>
  </div>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
