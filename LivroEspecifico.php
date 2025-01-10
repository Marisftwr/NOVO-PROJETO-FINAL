<?php
include('protect.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel='stylesheet' href="bootstrap-grid.css">
    <link rel='stylesheet' href="styles.css">
    <link rel='stylesheet' href="bootstrap copy.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Ahom&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="ClubeLiterarioProjetoFinal.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js" ></script>

    <title>Nome do Livro</title>
</head>
<body>
    <body class="bodyRoxo">
        <nav class="container-fluid">
          <ul class="row">
            <a class="col-sm-3">
              <img id="x1" src="LogoSite.png">
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
                  <li><a class="dropdown-item" href="#">Terror</a></li>
                  <li><a class="dropdown-item" href="#">Aventura</a></li>
                  <li><a class="dropdown-item" href="#">Mistério/Suspense</a></li>
  
                </ul>
              </li>
              <!--Nav lateral-->
            <div class="col-sm-1">
            <button class="btn btn-outline-secondary" type="submit" id="" onclick="openNav()"><img id="x2" src="menu.png"></button>
            </div>
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
            <!--Fim da nav lateral-->
            </ul>
        </nav>
        <hr class="linhaHome">
        <br><br>
        <div class="container-fluid">
        <a href= "PáginasDeLeituraLivro.php"><img  id ="x14" src="NovaImagemTesteLivroParaFicarBonito.jpg" alt="Livro1"></a> 
        </div><br>
        <div class="container-fluid">
          <h3 id="x17" class="quicksand-regular">
            Descrição:
          </h3>
          <h5 id="x17" class="quicksand-regular2">
            Descrição sobre o livro
          </h5>
          <h4 id="x19" class="quicksand-regular">
            Avaliação Geral:
          </h4>
          <h5 id="x19" class="quicksand-regular2">
            4.5/5
          </h5>
          <h6 id="x19" class="quicksand-regular2">
            x pessoas avaliaram
          </h6>
          <h5 id="x17" class="quicksand-regular">
            Gênero
          </h5>
          <h6 id="x17" class="quicksand-regular2">
            Gênero do livro
          </h6>
        </div><br><br>
        <!--Parte de comentários-->
      <div class="container-fluid">
        <h3 x
        id="x17" class="quicksand-regular">
          Comentários sobre o livro:
        </h3><br>
  <div class="divComment"><br>
        <div class="card sm-1">
          <div class="card-body">
              <form>
              <div class="sm-4">
                <label for="commentContent" class="form-label">
                  <a href="PaginaDePerfil">
                  <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User Avatar">
                  </a>
                </label>
                <div class="container-fluid">
                <textarea class="form-control" id="commentContent" rows="2" COLS="200" placeholder="Comente aqui"></textarea>
              </div>
              </div>
              <button type="submit" class="btn btn-outline-secondary">Post Comment</button>
            </form>
          </div>
        
        </div><br><br>
        <!--Outro comentários além do usuário-->
        <div class="comments-list">
          <!-- Comment 1 -->
          <div class="card mb-3">
            <div id="x18" class="card-body">
              <div class="d-flex mb-3">
                <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User Avatar">
                <div>
                  <h5 class="card-title mb-0">João</h5>
                  <small class="text-muted">Posted on July 17, 2024</small>
                </div>
              </div>
              <p class="card-text">Adorei!</p>
              <div class="d-flex justify-content-end">
                <button class="btn btn-sm btn-outline-secondary me-2">
                  <i class="bi bi-hand-thumbs-up"></i> Curtir
                </button>
                <button class="btn btn-sm btn-outline-secondary">
                  <i class="bi bi-reply"></i> Responder
                </button>
              </div>
              </div>
            </div>
            <div class="card mb-3">
              <div id="x18" class="card-body">
                <div class="d-flex mb-3">
                  <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User Avatar">
                  <div>
                    <h5 class="card-title mb-0">Sarah</h5>
                    <small class="text-muted">Posted on July 17, 2024</small>
                  </div>
                </div>
                <p class="card-text">Que livro horrível!</p>
                <div class="d-flex justify-content-end">
                  <button class="btn btn-sm btn-outline-secondary me-2">
                    <i class="bi bi-hand-thumbs-up"></i> Curtir
                  </button>
                  <button class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-reply"></i> Responder
                  </button>
                </div>
  </div>
    </div>
</body>
</html>