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
    <link rel='stylesheet' href="styles.css">
    <link rel='stylesheet' href="bootstrap copy.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Ahom&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="ClubeLiterarioProjetoFinal2.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js" ></script>
    
    <title>Perfil</title>
</head>
<body class="bodyPP">
    <nav class="container-fluid">
        <ul class="row">
          <a class="col-sm-3">
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
                <a href="PaginaDePerfil.php"><img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User Avatar"></a><br>
                <p class="quicksand-regular2"><?php echo $_SESSION['nome']; ?></p><br>
              <form class="form-inline">
              <input class="form-control col-sm-10" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><img id="BotaoPesquisa" src="SearchIcon1.png"></button>
              </form>
                <a class="quicksand-regular2" href="QuemSomos.html">Quem Somos?</a><br><br>
                <a class="quicksand-regular2" href="#">Minhas Listas</a><br><br>
                <a class="quicksand-regular2" href="#">Avaliações</a><br><br>
                <a class="quicksand-regular2" href="#">Editar Perfil</a><br><br>
                <a class="quicksand-regular2" href="#">Configurações</a><img id="config" src="configurações.png"><br><br>
                <a class="quicksand-regular2" href="#">Sair</a><br><br>
            </div>
        <!--Divs para editar perfil-->
        <h1 id="x10" class="quicksand-regular">Editar perfil:</h1>
        <div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header"><h3 class="quicksand-regular">Detalhes da conta:</h3></div>
                <div class="card-body">
                    <form>
                    
                            <div class="mb-3">
                                <label  class="quicksand-regular2" for="inputUsername">@nomedeusuario (como seu nome aparecerá no seu perfil)</label><br><br>
                                <input  class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                            </div><br>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="quicksand-regular2" for="inputFirstName">Nome:</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Nome:">
                            </div>
                            <div class="col-md-6">
                                <label class="quicksand-regular2" for="inputOrgName">Endereço de e-mail:</label><br>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="nome@email.com">
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="mb-3">
                                <label class="quicksand-regular2" for="inputLocation">Header:</label><br><br>
                                <img id="headerUserUp" src="Harry Potter banner.png"><br><br>
                                <button class="btn btn-primary" type="button">Upload nova imagem</button>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="button">Salvar mudanças</button>
                    </form><br>
                        <div id="cardHeaderProfile" class="card-header"><h4 class=quicksand-regular>Foto de Perfil</h4></div>
                            <div class="card-body text-center">
                                <img id="ProfilePic2" src="profile picture.jpg"><br><br>
                                <!-- Profile picture upload button-->
                                <button class="btn btn-primary" type="button">Upload nova foto de perfil</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>
