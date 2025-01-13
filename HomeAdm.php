<?php
include('protect.php')
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube literário - Home</title>
    <link rel="icon" type="image/x-icon" href="IconSite.png">
    <link rel='stylesheet' href="bootstrap-grid.css">
    <link rel='stylesheet' href="styles1.css">
    <link rel='stylesheet' href="bootstrap copy.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Ahom&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="ClubeLiterarioProjetoFinal.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js" ></script>
</head>
<body class="bodyRoxo">
      <nav class="container-fluid">
        <ul class="row">
          <a class="col-sm-4">
            <img class="img-fluid" src="LogoSite3.png">
          </a>
          <li class="col-sm-2">
            <a class="nav-link" href="Home.php">Home</a>
          </li>
            <li class="col-sm-2">
              <a class="nav-link" href="#">Destaques</a>
            </li>
            <li class="col-sm-2">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Gêneros
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Romance</a></li>
                <li><a class="dropdown-item" href="#">Ficção centífica</a></li>
                <li><a class="dropdown-item" href="#">Comédia Romântica</a></li>
                <li><a class="dropdown-item" href="#">Biografia</a></li>
                <li><a class="dropdown-item" href="#">Drama</a></li> 
                <li><a class="dropdown-item" href="#">Terror</a></li>
                <li><a class="dropdown-item" href="#">Aventura</a></li>
                <li><a class="dropdown-item" href="#">Mistério/Suspense</a></li>

              </ul>
            </li>
            <div class="col-sm-1">
            <button class="btn btn-outline-secondary" type="submit" id="" onclick="openNav()"><img id="x2" src="menu.png"></button>
            </div>
          </ul>
      </nav>
        <hr class="linhaHome">
        <br><br>
        <h1 class="quicksand-regular">Bem vindo ao Clube Literario, <?php echo $_SESSION['nome']; ?></h1><br>
        <!--Carrossel de fotos-->
        <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="container-fluid">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img id="x5" src="Harry Potter banner.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Harry Potter banner.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Harry Potter banner.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Harry Potter banner.png" class="d-block w-100" alt="...">
              </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div><br><br>
        <!--Nav lateral (coloquei aqui pois o carrossel estava atrapalhando)-->
            <div id="mySidenav" class="sidenav">
              <a class="quicksand-regular2" href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img id="fechar" src="fechar.png"></a><br><br>
              <a href="PaginaDePerfil.php"><img id="ProfilePicNav" src="profile picture.jpg" class="rounded-circle me-3" alt="User Avatar"></a><br>
              <p class="quicksand-regular2"><?php echo $_SESSION['nome']; ?></p><br>
              <form class="form-inline">
              <input class="form-control col-sm-10" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><img id="BotaoPesquisa" src="SearchIcon1.png"></button>
              </form>
              <a class="quicksand-regular2" href="QuemSomos.html">Quem Somos?</a><br><br>
              <a class="quicksand-regular2" href="#">Minhas listas</a><br><br>
              <a class="quicksand-regular2" href="#">Avaliações</a><br><br>
              <a class="quicksand-regular2" href="configuracoes.php">Configurações</a><img id="config" src="configurações.png"><br><br>
              <a class="quicksand-regular2" href="FerramentasAdm.php">Ferramentas do Administrador</a><br><br>
              <a href="logout.php" class="quicksand-regular2">Sair</a><br><br>
            </div>
      <!--Fim nav lateral-->
        <!--Catálogo de livros-->
        <div class="container-fluid" id="divLivros"><br>
          <div id="divLiv" class="container-fluid">
            <h1 class="quicksand-regular">
              Livros
            </h1>
          </div><br>
          <ul class="row sm-3">
          <h3 id="x17" class="quicksand-regular">
            Filtros:
          </h3>
          <li class="col-sm-1">
              <a id="TamanhoFilt" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Gêneros
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Romance</a></li>
                <li><a class="dropdown-item" href="#">Ficção centífica</a></li>
                <li><a class="dropdown-item" href="#">Comédia Romântica</a></li>
                <li><a class="dropdown-item" href="#">Biografia</a></li>
                <li><a class="dropdown-item" href="#">Drama</a></li> 
                <li><a class="dropdown-item" href="#">Terror</a></li>
                <li><a class="dropdown-item" href="#">Aventura</a></li>
                <li><a class="dropdown-item" href="#">Mistério/Suspense</a></li>

              </ul>
            </li>
            <li class="col-sm-1">
              <a id="TamanhoFilt" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Maior livro
              </a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item">Menor livro</a></li>
             </ul>
            </li>
            <li class="col-sm-1">
              <a id="TamanhoFilt" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mais lidos
              </a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item">Menos lidos</a></li>
             </ul>
             <li class="col-sm-1">
              <a id="TamanhoFilt" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nacional
              </a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item">Internacional</a></li>
             </ul>
             </li>
             <li class="col-sm-1">
              <a id="TamanhoFilt" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Autor
              </a>
             </li>
             <li class="col-sm-1">
              <a id="TamanhoFilt" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ano
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"> '<' 1000 a.c. </a></li>
                <li><a class="dropdown-item" href="#">1500-1800</a></li>
                <li><a class="dropdown-item" href="#">1800-1850</a></li>
                <li><a class="dropdown-item" href="#">1900-1950</a></li>
                <li><a class="dropdown-item" href="#">1950-2000</a></li> 
                <li><a class="dropdown-item" href="#">2000-Dias atuais</a></li>
              </ul>
            </li>
            </ul>

            <br><br>
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" class="card-img-top" src="https://m.media-amazon.com/images/I/61DouJElapL._SL1335_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Ressurreição</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" class="card-img-top" src="https://m.media-amazon.com/images/I/613D-uzZ8AL._SL1360_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">A mão e a luva</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" class="card-img-top" src="https://m.media-amazon.com/images/I/61KDbIA7t6L._SL1360_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Helena</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div><br>
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/71KjaiJzLAL._SL1354_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Iaiá Garcia</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div><br>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/71OL9RU2tJL._SL1360_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Memórias póstumas de Brás Cubas</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/81mZwQB6JBL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Casa velha</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/61Kt3d+mhuL._SL1360_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Quincas Borba</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div><br>   
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/61Z2bMhGicL._SL1360_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Dom Casmurro</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" class="card-img-top" src="https://m.media-amazon.com/images/I/81Oj0Etf1uL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Esaú e Jacó</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/61R-l9vG27S._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Memorial de Aires</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" class="card-img-top" src="https://m.media-amazon.com/images/I/91EFlhvmgNL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">O misterioso caso de Styles</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div><br>   
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/A1AyJjCssnL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">O adversário secreto</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/91VpEyvWxjL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Os cinco porquinhos</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/71pz1UaMlEL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Os três ratos e outros contos</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/81Zp6MFxIDL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">O assassinato no expresso oriente</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/71Jt2eJxI6L._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">A morte no Nilo</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/71SkL5rDqUL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">A noite das bruxas</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/618-b9Im6dL._SL1457_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Vidas secas</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" class="card-img-top" src="https://m.media-amazon.com/images/I/71Ez-SH-q5L._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Tudo bem quando termina bem</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://www.lpm.com.br/livros/Imagens/trabalhos_de_amor_perdidos_nova__9788525412386_g.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Trabalhos de amor perdidos</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/915rFCUXeiL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Sonho de uma noite de verão</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/51O9n2ggXEL._SL1050_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Sonetos</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://images.tcdn.com.br/img/img_prod/1323385/senhora_jose_de_alencar_principis_13711_1_b02b5a25d6c421143388a8d35da5cda0.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Senhora</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div>  
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/719trP22IcL._SL1360_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Romeu e Julieta</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" style="height: 22rem;"  class="card-img-top" src="https://m.media-amazon.com/images/I/81uiON7YuCL._SL1378_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Ricardo III</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://cdl-static.s3-sa-east-1.amazonaws.com/covers/gg/9788582851111/rei-lear.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Rei Lear</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"class="card-img-top" src="https://m.media-amazon.com/images/I/81dUyuZqKPL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Primeiro Fausto</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/61QXWuU+YWS._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Poesias inéditas</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" style="height: 23rem;" class="card-img-top" src="https://tocalivros.s3.amazonaws.com/images/audiolivros/350/o/s/os-sertoes-euclides-da-cunha-juliana-muscovick-1135888.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Os sertões</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" style="height: 20rem;"  class="card-img-top" src="https://m.media-amazon.com/images/I/91AvfvzrKuL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">A tragédia de Hamlet, o príncipe da Dinamarca</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"class="card-img-top" src="https://m.media-amazon.com/images/I/81yB3mQGm7L._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">MacBeth</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/81m1emiSp-S._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">O cortiço</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" style="height: 22rem;"  class="card-img-top" src="https://m.media-amazon.com/images/I/61tlNNO6kRL._SL1050_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">A pianista</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/41b6E0pDLCL.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">A mulher de preto</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" style="height: 20rem;" class="card-img-top" src="https://m.media-amazon.com/images/I/71QLwli7GUL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">A metamorfose</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div>                         
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/71M+gr7oFeL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">As primaveras</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" style="height: 22rem;"  class="card-img-top" src="https://m.media-amazon.com/images/I/816Lq8xxPlL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Os Maias</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/913JKLHKN1L._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">A cartomante</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" style="height: 22rem;" class="card-img-top" src="https://m.media-amazon.com/images/I/91IRKga3qTL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">A tempestade</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div>                         
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/91A+plhbEHL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Da arte poética</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" style="height: 22rem;"  class="card-img-top" src="https://m.media-amazon.com/images/I/612dfTY2TbL._SL1453_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Diário de bitita</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/71z42zpEwbL._SL1500_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Quarto de despejo</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"class="card-img-top" src="https://wikifavelas.com.br/images/3/34/Capa_Peda%C3%A7os_da_Fome..jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Pedaços da fome</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div>                         
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://carolinamariadejesus.ims.com.br/wp-content/uploads/2024/02/52.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Provérbios</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" style="height: 22rem;"  class="card-img-top" src="https://carolinamariadejesus.ims.com.br/wp-content/uploads/2024/02/53.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Antologia pessoal</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://m.media-amazon.com/images/I/719esIW3D7L._SL1297_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Orgulho e Preconceito</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"class="card-img-top" src="https://m.media-amazon.com/images/I/814Y0DO2OZL._SL1297_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Persuasão</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div>                         
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://cdl-static.s3-sa-east-1.amazonaws.com/covers/gg/9788582851050/emma.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Emma</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" style="height: 22rem;"  class="card-img-top" src="https://m.media-amazon.com/images/I/81eN74IRg4L._SL1297_.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Razão e sensibilidade</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="https://livrariapublica.com.br/capa/lady-susan-e-outras-historias-jane-austen-pdf-B085FXL6HM.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Lady Susan</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">.</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div>                                                                
          <br><br>
        </div>
</body>
</html>
