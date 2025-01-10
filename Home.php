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
    <link rel='stylesheet' href="bootstrap-grid.css">
    <link rel='stylesheet' href="styles.css">
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
          <a class="col-sm-3">
            <img id="x1" class="img-fluid" src="LogoSite.png">
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
              <a href="PaginaDePerfil.php"><img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User Avatar"></a><br>
              <p class="quicksand-regular2"><?php echo $_SESSION['nome']; ?></p><br>
              <form class="form-inline">
              <input class="form-control col-sm-10" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><img id="BotaoPesquisa" src="SearchIcon1.png"></button>
              </form>
              <a class="quicksand-regular2" href="QuemSomos.html">Quem Somos?</a><br><br>
              <a class="quicksand-regular2" href="#">Minhas listas</a><br><br>
              <a class="quicksand-regular2" href="#">Avaliações</a><br><br>
              <a class="quicksand-regular2" href="configuracoes.php">Configurações</a><img id="config" src="configurações.png"><br><br>
              <a href="logout.php" class="quicksand-regular2">Sair</a><br><br>
            </div>
      <!--Fim nav lateral-->
        <!--Catálogo de livros-->
        <div class="container-fluid" id="divLivros"><br>
          <h1 class="quicksand-regular">
            Livros
          </h1>
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
                    <img id="fotoLivro" class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
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
                    <img id="fotoLivro" class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div><br>
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div><br>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div><br>   
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
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
                    <img id="fotoLivro"  class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro" class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div><br>   
            <div class="row">
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div id="cardLivro" class="card" style="width: 15rem;">
                    <img id="fotoLivro"  class="card-img-top" src="HarryPotter1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <a href="LivroEspecifico.php" class="btn btn-primary">Veja mais</a>
                  </div>
                </div>
              </div>
            </div>      
          <br><br>
        </div>
</body>
</html>

