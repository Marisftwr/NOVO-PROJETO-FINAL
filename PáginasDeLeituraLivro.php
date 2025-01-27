<?php
include ('protect.php');

if(isset($_GET['id'])) {
  $id = $_GET['id'];

  include('conexao.php');

  $sql = "SELECT * FROM livro WHERE id=$id";
  $query  = mysqli_query($conexao, $sql);

  if(mysqli_num_rows($query) > 0){
    $livroespecifico = mysqli_fetch_assoc($query);

    $id = $livroespecifico['id'];
    $nome = $livroespecifico['nome'];
    $genero = $livroespecifico['genero'];
    $autor = $livroespecifico['autor'];
    $ano = $livroespecifico['ano'];
    $numPag = $livroespecifico['numPaginas'];
    $isbn = $livroespecifico['ISBN'];
    $pathcapa = $livroespecifico['capa_path'];
    $pathlivro = $livroespecifico['livro_path'];
  } else {
    echo "Livro não encontrado!";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="IconSite.png">
    <link rel='stylesheet' href="bootstrap-grid.css">
    <link rel='stylesheet' href="styles1.css">
    <link rel='stylesheet' href="bootstrap copy2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Ahom&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="ClubeLiterarioProjetoFinal1.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js" ></script>

    <title>Página de leitura - Nome do livro</title>

</head>
<body>
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
            <hr class="linhaHome"><br><br><br>
            <div class="container-fluid">
                <div id="DivPags" style="height:100vh;" class="col-sm-6"> 
                  <iframe height="100%" width=100% src="<?php echo $pathlivro; ?>"></iframe> 
                </div><br><br>
                <h3 id="x17" class="quicksand-regular"> Anotações:</h3><br>
                <div class="card sm-1">
                    <div class="card-body">
                        <form>
                        <div class="sm-4">
                          <label for="commentContent" class="form-label">
                            <a href="PaginaDePerfil.php">
                            <img id="ProfilePic" src="profile picture.jpg" class="rounded-circle me-3" alt="User Avatar">
                            </a>
                          </label>
                          <div class="container-fluid">
                          <textarea class="form-control" id="commentContent" rows="2" COLS="100" placeholder="Anote aqui"></textarea>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-outline-secondary">Salvar</button>
                      </form>
                    </div>

            </div><br>
            
            <div class=" d-flex justify-content-center mt-5">
                <div class=" text-center mb-5">
                    <h4 id="x17" class="quicksand-regular">Qual sua avaliação para esse livro?</h4>
                        <div class="rating"> 
                            <input type="radio" name="rating" value="5" id="5">
                            <label for="5">☆</label> 
                            <input type="radio" name="rating" value="4" id="4">
                            <label for="4">☆</label> 
                            <input type="radio" name="rating" value="3" id="3">
                            <label for="3">☆</label> 
                            <input type="radio" name="rating" value="2" id="2">
                            <label for="2">☆</label> <input type="radio" name="rating" value="1" id="1">
                            <label for="1">☆</label> 
                        </div>
                        <div class="buttons  mt-0"> <button id="botao" class="btn btn-outline-secondary">Enviar</button> </div>
                    </div>
                </div>
            </div>
            <div id="mySidenav" class="sidenav">
                    <a class="quicksand-regular2" href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img id="fechar" src="fechar.png"></a><br><br>
                    <a href="PaginaDePerfil.php"><img id="ProfilePicNav" src="profile picture.jpg" class="rounded-circle me-3" alt="User Avatar"></a><br>
                    <p class="quicksand-regular2"><?php echo $_SESSION['nome']; ?></p><br>
                    <form class="form-inline">
                    <input class="form-control col-sm-10" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><img id="BotaoPesquisa" src="SearchIcon1.png"></button>
                    </form>
                    <a class="quicksand-regular2" href="QuemSomos.php">Quem Somos?</a><br><br>
                    <a class="quicksand-regular2" href="paraLer.php">Minha lista</a><br><br>
                    <a class="quicksand-regular2" href="avaliacoes.php">Avaliações</a><br><br>
                    <a class="quicksand-regular2" href="#">Configurações</a><img id="config" src="configurações.png"><br><br>
                    <a class="quicksand-regular2" href="#">Sair</a><br><br>
              </div>
              
              <div id="mySidenav" class="sidenav">
                    <a class="quicksand-regular2" href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img id="fechar" src="fechar.png"></a><br><br>
                    <a href="PaginaDePerfil.php"><img id="ProfilePicNav" src="profile picture.jpg" class="rounded-circle me-3" alt="User Avatar"></a><br>
                    <p class="quicksand-regular2"><?php echo $_SESSION['nome']; ?></p><br>
                    <form class="form-inline">
                    <input class="form-control col-sm-10" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><img id="BotaoPesquisa" src="SearchIcon1.png"></button>
                    </form>
                    <a class="quicksand-regular2" href="QuemSomos.php">Quem Somos?</a><br><br>
                    <a class="quicksand-regular2" href="paraLer.php">Minha lista</a><br><br>
                    <a class="quicksand-regular2" href="avaliacoes.php">Avaliações</a><br><br>
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
</body>
</html>
