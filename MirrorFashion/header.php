<!DOCTYPOE html>
<html>
  <head>
        <meta charset="utf-8">
      <title> <?php print $cabecalho_title; ?> </title>
        <link rel="stylesheet" href="css/index.css">

        <link rel="stylesheet" href="css/sobre.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/jcarousel.basic.css">
        <link rel="stylesheet" type="text/css" href="css/jcarousel.data-attributes.css">

        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/teste.js"></script>
        <script type="text/javascript" src="plugins/bootstrap-validator-master/bootstrap-validator-master/dist/validator.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/home.js"></script>
        <script type="text/javascript" src="js/dist/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="js/dist/jcarousel.basic.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="js/jcarousel.data-attributes.js"></script>
    </head>
    
    
  <body>
        <div class="container">

          <header>

          <div class="row">
            <!-- conteúdo do cabeçalho -->
              <div class="col-md-12">
                <h1>
                 <div id="logo-topo">
                  <img src="img/logo.png" alt="Mirror Fashion">

                </div>
              </h1>  
              <p class="sacola-vazia">
                Sua sacola de comprar está vazia.
              </p>
            </div>
        </div>

          <div class="row azul">

            <div class=" col-md-12">
              <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="index.php">Início</a></li>
                <li role="presentation"><a href="conta.php">Sua conta</a></li>
                <li role="presentation"><a href="listadesejos.php">Lista de desejos</a></li>
                <li role="presentation"><a href="cartaofelicidade.php">Cartão felicidade</a></li>
                <li role="presentation"><a href="sobre.php">Sobre</a></li>
                <li role="presentation"><a href="ajuda.php">Ajuda</a></li>
                <li role="presentation"><a href="cadastro.php">Cadastre-se</a></li>
              </ul>
            </div>

            

            <div class="btn-group col-md-8" role="group" aria-label="...">
              <a type="button" class="btn btn-default" href="produtos.php?categoria=blusas" id="blusas">Blusas e Camisas</a>
              <a type="button" class="btn btn-default" href="produtos.php?categoria=calcas" id="calcas">Calças</a>
              <a type="button" class="btn btn-default" href="produtos.php?categoria=saias" id="saias">Saias</a>
              <a type="button" class="btn btn-default" href="produtos.php?categoria=vestidos" id="vestidos">Vestidos</a>
              <a type="button" class="btn btn-default" href="produtos.php?categoria=sapatos" id="sapatos">Sapatos</a>
              <a type="button" class="btn btn-default" href="produtos.php?categoria=bolsas" id="bolsas">Bolsas e Carteiras</a>
              <a type="button" class="btn btn-default" href="produtos.php?categoria=acessorios" id="acessorios">Acessórios</a>
            </div>

            <div class="col-md-4">

              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Busque algo">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
            </div>

          </div>

          



        </header>