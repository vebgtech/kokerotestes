<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos - Brechó Kokero</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #000;
      color: #fff;
      font-family: 'Poppins', sans-serif;
    }

    /* ===========================
       NAVBAR
    =========================== */
    .navbar {
      background-color: #014d00;
    }
    .navbar .nav-link {
      color: #9ed06f;
      font-weight: 600;
    }
    .navbar .nav-link:hover,
    .navbar .nav-link.active {
      color: #fcd634; /* amarelo */
    }
    .navbar .btn {
      border-radius: 20px;
      background-color: #2b5e1d;
      color: #fff;
    }
    .navbar .btn:hover {
      background-color: #1b3e0e;
    }

    /* ===========================
       PRODUTOS
    =========================== */
    .produtos {
      padding: 60px 15px;
    }
    .produtos h2 {
      font-weight: 700;
      margin-bottom: 30px;
      color: #fcd634; /* amarelo para títulos */
      text-align: center;
    }
    .produtos .categoria {
      margin-bottom: 60px;
    }
    .produtos .categoria h3 {
      color: #9ed06f;
      margin-bottom: 20px;
      text-align: left;
      border-bottom: 2px solid #2b5e1d;
      padding-bottom: 5px;
    }
    .produtos .card {
      background-color: #111;
      border: 1px solid #2b5e1d;
      border-radius: 10px;
      transition: transform 0.3s;
    }
    .produtos .card:hover {
      transform: scale(1.05);
      border-color: #fcd634;
    }
    .produtos .card img {
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      max-height: 250px;
      object-fit: cover;
    }
    .produtos .card-body {
      text-align: center;
    }
    .produtos .card-title {
      font-weight: 600;
      color: #fff;
    }
    .produtos .card-text {
      color: #ccc;
    }
    .produtos .btn-comprar {
      background-color: #2b5e1d;
      color: #fff;
      border-radius: 20px;
    }
    .produtos .btn-comprar:hover {
      background-color: #fcd634;
      color: #000;
    }

    /* ===========================
       FOOTER
    =========================== */
    footer {
      background-color: #014d00;
      color: #fff;
      padding: 40px 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      text-align: center;
      gap: 20px;
    }
    footer a {
      color: #fff;
      text-decoration: none;
    }
    footer a:hover {
      color: #9ed06f;
    }
    .footer-social i {
      font-size: 24px;
      color: #fff;
      margin-right: 8px;
    }

    /* ===========================
       RESPONSIVO
    =========================== */
    @media (max-width: 768px) {
      .produtos .row {
        flex-direction: column;
        gap: 20px;
      }
      .navbar form {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="img/logo.png" alt="Logo" style="height: 80px; width:auto;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon" style="color:#fff;"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="index.html">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="produtos.html">Produtos</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu" role="button" data-bs-toggle="dropdown">
              Categorias
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
              <li><a class="dropdown-item" href="#roupas-masculinas">Roupas Masculinas</a></li>
              <li><a class="dropdown-item" href="#roupas-femininas">Roupas Femininas</a></li>
              <li><a class="dropdown-item" href="#acessorios">Acessórios</a></li>
              <li><a class="dropdown-item" href="#promocoes">Promoções</a></li>
            </ul>
          </li>
        </ul>

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

  <!-- Produtos -->
  <div class="produtos container">

    <!-- Roupas Masculinas -->
    <div class="categoria" id="roupas-masculinas">
      <h3>Roupas Masculinas</h3>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="img/produto1.jpg" class="card-img-top" alt="Produto 1">
            <div class="card-body">
              <h5 class="card-title">Camiseta Masculina</h5>
              <p class="card-text">Camiseta confortável e estilosa.</p>
              <button class="btn btn-comprar">Comprar</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/produto2.jpg" class="card-img-top" alt="Produto 2">
            <div class="card-body">
              <h5 class="card-title">Jaqueta Jeans</h5>
              <p class="card-text">Jaqueta clássica masculina.</p>
              <button class="btn btn-comprar">Comprar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Roupas Femininas -->
    <div class="categoria" id="roupas-femininas">
      <h3>Roupas Femininas</h3>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="img/produto3.jpg" class="card-img-top" alt="Produto 3">
            <div class="card-body">
              <h5 class="card-title">Vestido Floral</h5>
              <p class="card-text">Vestido leve para todas ocasiões.</p>
              <button class="btn btn-comprar">Comprar</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/produto4.jpg" class="card-img-top" alt="Produto 4">
            <div class="card-body">
              <h5 class="card-title">Blusa Feminina</h5>
              <p class="card-text">Blusa moderna e confortável.</p>
              <button class="btn btn-comprar">Comprar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Acessórios -->
    <div class="categoria" id="acessorios">
      <h3>Acessórios</h3>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="img/produto5.jpg" class="card-img-top" alt="Produto 5">
            <div class="card-body">
              <h5 class="card-title">Bolsa de Couro</h5>
              <p class="card-text">Bolsa elegante para qualquer ocasião.</p>
              <button class="btn btn-comprar">Comprar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Promoções -->
    <div class="categoria" id="promocoes">
      <h3>Promoções</h3>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="img/produto6.jpg" class="card-img-top" alt="Produto 6">
            <div class="card-body">
              <h5 class="card-title">Tênis Masculino</h5>
              <p class="card-text">Desconto especial de 20%.</p>
              <button class="btn btn-comprar">Comprar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-social">
      <h5>Siga-nos:</h5>
      <p><i class="bi bi-instagram"></i> <a href="https://www.instagram.com/brechokokero" target="_blank">@brechokokero</a></p>
      <p><i class="bi bi-whatsapp"></i> <a href="https://wa.me/5511992424158" target="_blank">+55 11 99242-4158</a></p>
    </div>
    <div class="footer-links">
      <h5>Links Úteis</h5>
      <ul>
        <li><a href="index.html">Início</a></li>
        <li><a href="produtos.html">Produtos</a></li>
        <li><a href="promocoes.html">Promoções</a></li>
      </ul>
    </div>
    <div class="footer-logo">
      <img src="img/logo.png" alt="Logo">
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
