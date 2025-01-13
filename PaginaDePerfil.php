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
    <link rel="icon" type="image/x-icon" href="IconSite.png">
    <link rel='stylesheet' href="bootstrap-grid.css">
    <link rel='stylesheet' href="styles1.css">
    <link rel='stylesheet' href="bootstrap copy.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Ahom&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="ClubeLiterarioProjetoFinal.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js" ></script>
    
    <title>Perfil</title>
</head>
<body class="bodyPP">
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
                <li><a class="dropdown-item" href="#">Terror</a></li>
                <li><a class="dropdown-item" href="#">Aventura</a></li>
                <li><a class="dropdown-item" href="#">Mistério/Suspense</a></li>

              </ul>
            </li>
            <div class="col-sm-1">
            <button class="btn btn-outline-secondary" type="submit" id="" onclick="openNav2()"><img id="x2" src="menu.png"></button>
            </div>
       </nav>
            <hr class="linhaHome">
            <br><br>
            <div id="mySidenav2" class="sidenav">
                <a class="quicksand-regular2" href="javascript:void(0)" class="closebtn" onclick="closeNav2()"><img id="fechar" src="fechar.png"></a><br><br>
                <a href="PaginaDePerfil.php"><img id="ProfilePicNav" src="profile picture.jpg" class="rounded-circle me-3" alt="User Avatar"></a><br>
                <p class="quicksand-regular2"><?php echo $_SESSION['nome']; ?></p><br>
              <form class="form-inline">
              <input class="form-control col-sm-10" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><img id="BotaoPesquisa" src="SearchIcon1.png"></button>
              </form>
                <a class="quicksand-regular2" href="QuemSomos.html">Quem Somos?</a><br><br>
                <a class="quicksand-regular2" href="#">Minhas Listas</a><br><br>
                <a class="quicksand-regular2" href="#">Avaliações</a><br><br>
                <a class="quicksand-regular2" href="EditarPerfil.php">Editar Perfil</a><br><br>
                <a class="quicksand-regular2" href="#">Configurações</a><img id="config" src="configurações.png"><br><br>
                <a class="quicksand-regular2" href="#">Sair</a><br><br>
            </div>
        <div class="container-fluid">
            <div class="HeaderUser">
                <img class="img-fluid" id="ProfilePic"src="profile picture.jpg">
            </div><br>
            <ul>
              <h3 id="x17" class="quicksand-regular"><?php echo $_SESSION['nome']; ?></h3>
            <p id="x17" class="quicksand-regular2">@nomedeusuario</p>
          </ul><br><br>
          <div class="row">
              <div class="col-lg">
                    <h4 id="x21" class="quicksand-regular">Livros lidos:</h4>
                    <h3 id="x21" class="quicksand-regular2">N</h3>
                    <h4 id="x21" class="quicksand-regular">Livros na lista:</h4>
                    <h3 id="x21" class="quicksand-regular2">n</h3>
             </div><br>
            
              <div class="col-lg">
                <h3 id="x17" class="quicksand-regular">Avaliações de <?php echo $_SESSION['nome']; ?>:</h3><br>
              <a href="avaliacoes.php">
                <div id="livAv" class="card" style="width: 20rem; height: 15rem;">
                  <div class="card-body">
                    <h5 class="card-title">Notas:</h5>
                    <a class="col-sm-2" href="PáginasDeLeituraLivro.php"><img id="x6" src="HarryPotter1.jpg" alt="Livro1"></a><br><br>
                    <p class="quicksand-regular2">Nome Livro</p>
                  </div>
              </a>
                </div>
              </div>
         </div><br><br>
         <div class="row">  
              <div class="col-lg">
              <h3 id="x17" class="quicksand-regular">Livros na lista de <?php echo $_SESSION['nome']; ?>:</h3><br>
              <a href="ListasUser.php">
                <div id="LivLista" class="card" style="width: 20rem; height: 15rem;">
                  <div class="card-body">
                    <h5 class="card-title">Livros:</h5>
                    <a class="col-sm-2" href="PáginasDeLeituraLivro.php"><img id="x6" src="HarryPotter1.jpg" alt="Livro1"></a><br><br>
                    <p class="quicksand-regular2">Nome Livro</p>
                  </div>
                </div>
              </a>
              </div>
              <div class="col-lg">
              <h3 id="x17"class="quicksand-regular">Continuar lendo:</h3><br>
              <div id="contLendo" class="card" style="width: 20rem; height:15rem;">
              <div class="card-body">
                <h5 class="card-title">Livros:</h5><br>
                <a class="col-sm-2" href="PáginasDeLeituraLivro.php"><img id="x6" src="HarryPotter1.jpg" alt="Livro1"></a><br><br>
                <p class="quicksand-regular2">Nome Livro</p>
          </div>
          </div>
                                    
           
