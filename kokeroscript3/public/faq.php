<?php
// Definindo o título da página dinamicamente
$title = "FAQ - Brechó Kokero";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    

<header>
    <!-- Barra de pesquisa em cima -->
    <div class="search-bar">
      <form class="d-flex justify-content-center" role="search">
        <input class="form-control w-75" type="search" placeholder="Buscar produtos..." aria-label="Search">
        <button class="btn btn-success ms-2" type="submit">Buscar</button>
      </form>
    </div>

    <!-- Navbar logo + menu -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        
        <!-- Logo -->
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="Logo" width="50" height="50">
        </a>

        <!-- Toggle para mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
          aria-controls="navbarContent" aria-expanded="false" aria-label="Menu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Produtos</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                <li><a class="dropdown-item" href="#">Eletrônicos</a></li>
                <li><a class="dropdown-item" href="#">Roupas</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Promoções</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

<div class="container">
    <div class="sidebar">
        <!-- Links de navegação -->
        <a href="#sobre" >Sobre os Produtos</a>
        <a href="#compra" >Compra e Pagamento</a>
        <a href="#envio" >Envio e Entrega</a>
        <a href="#trocas" >Trocas e Devoluções</a>
        <a href="#tamanhos" >Tamanhos e Medidas</a>
        <a href="#loja" >Loja Física</a>
        <a href="#contato" >Suporte e Contato</a>
    </div>

    <div class="content">
        <section id="sobre" class="faq-item">
            <h2> Sobre os Produtos</h2>
            </br>
             <h3> Os produtos são originais?</h3>
            <p>Sim! Trabalhamos exclusivamente com produtos 100% originais, garantindo autenticidade e qualidade em cada peça.</p>
            </br>
            <h3> Os produtos são novos ou usados?</h3>
            <p>Nossa curadoria é composta por itens vintage e seminovos, todos cuidadosamente selecionados e higienizados antes de serem disponibilizados para venda.</p>
            </br>
            <h3>As peças apresentam sinais de uso?</h3>
            <p>Por serem vintage, algumas peças podem apresentar leves marcas do tempo, o que faz parte da história e autenticidade de cada item. Caso haja algum detalhe relevante (manchas, furos, desgastes), ele será informado na descrição do produto e ilustrado nas fotos.</p>
        </section>
        </br></br></br>
        <section id="compra" class="faq-item">
            <h2>Compra e Pagamento</h2>
            </br>
            <h3>Posso comprar diretamente pelo WhatsApp?</h3>
            <p>Sim. Todas as compras são feitas exclusivamente pelo nosso whatsapp. </p>
           </br>
            <h3>Quais são as formas de pagamento?</h3>
            <p>Aceitamos somente Pix, proporcionando praticidade e segurança na sua compra.</p>
        </section>
        </br></br></br>
        <section id="envio" class="faq-item">
            <h2> Envio e Entrega</h2>
            </br>
            <h3>Vocês fazem entrega em estações de metrô/trem?</h3>
            <p>Não fazemos entregas pessoais. Todas as entregas são realizadas exclusivamente via transportadora para garantir maior segurança e rastreamento.</p>
           </br>
            <h3>Como calcular o frete e prazo de entrega?</h3>
            <p>Para calcular o frete e prazo de entrega, basta selecionar o produto desejado e inserir seu CEP no campo correspondente.</p>
        </section>
        </br></br></br>
        <section id="trocas" class="faq-item">
            <h2>Trocas e Devoluções</h2>
           </br> 
            <h3>Nao seii oo</h3>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
            </br> 
            <h3>Nao seii oo</h3>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>

        </section>
        </br> </br> </br> 
        <section id="tamanhos" class="faq-item">
            <h2>Tamanhos e Medidas</h2>
            </br> 
            <h3>O tamanho informado na etiqueta é confiável?</h3>
            <p>Nem sempre! Como trabalhamos com diferentes marcas e épocas, os tamanhos podem variar. Por isso, informamos todas as dimensões reais na descrição do produto.</p>
             
        </section>
       </br></br></br>
        <section id="loja" class="faq-item">
            <h2>Loja Física</h2>
            </br>
            <h3>Vocês possuem loja física?</h3>
            <p>Não temos uma loja física. Todas as compras são feitas via WhatsApp.</p>
        </section>
        </br></br></br>
        <section id="contato" class="faq-item">
            <h3>Suporte e Contato</h3>
            <p>Se ainda tiver dúvidas, nossa equipe está sempre pronta para te ajudar! Entre em contato por:</p>
            <p><strong>WhatsApp:</strong> <a href="tel:+5511992424158">+55 11 99242-4158</a></p>
            <p><strong>Instagram:</strong> <a href="https://instagram.com/brecho.kokero" target="_blank">@brecho.kokero</a></p>
        </section>
    </div>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Brechó Kokero. Todos os direitos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
