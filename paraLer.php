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
    
    <title>Livros para ler</title>
</head>
<body class="bodyAv">
    <nav class="container-fluid">
        <ul class="row">
          <a class="col-sm-4">
            <img class="img-fluid" src="LogoSite3.png">
          </a>
          <li class="col-sm-2">
            <a class="nav-link" href="Home.php">Home</a>
          </li>
            <li class="col-sm-2">
              <a class="nav-link" href="avaliacoes.php">Avaliações do usuário</a>
            </li>
            <li class="col-sm-2">
              <a class="nav-link " href="PaginaDePerfil.php" >
                Página de perfil
              </a>
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
                <a class="quicksand-regular2" href="">Minha Lista</a><br><br>
                <a class="quicksand-regular2" href="avaliacoes.php">Avaliações</a><br><br>
                <a class="quicksand-regular2" href="EditarPerfil.php">Editar Perfil</a><br><br>
                <a class="quicksand-regular2" href="#">Configurações</a><img id="config" src="configurações.png"><br><br>
                <a class="quicksand-regular2" href="#">Sair</a><br><br>
            </div>
            <footer class="container-fluid"><br>
        <h3 class="quicksand-regular">
          Informações gerais:
        </h3><br>
        <h5 class="quicksand-regular">
          Contato:
        </h5>
        <p  class="quicksand-regular2">
          <img id="iconRedes" src="whatsapp.png">  (21)91989-1304
        </p><br>
        <p  class="quicksand-regular2">
          <img id="iconRedes" src="google.png">  clubeliterario@gmail.com
        </p><BR>
        <h5   class="quicksand-regular">
          Redes sociais:
        </h5>
        <p class="quicksand-regular2">
          <img id="iconRedes" src="x-social-media-round-icon.png">  @Clube_literario
        </p><br>
        <p  class="quicksand-regular2">
          <img id="iconRedes" src="Instagram.png">  @Clubeliterarioficial
        </p><br>
        <h5 class="quicksand-regular">
          Endereço: 
        </h5>
        <p class="quicksand-regular2">Bairro, rua e número.</p><br>
      </footer>