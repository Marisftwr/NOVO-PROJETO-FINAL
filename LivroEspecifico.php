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
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title><?php echo $nome; ?></title>
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
        <hr class="linhaHome">
        <br><br>
        <div class="container-fluid">
        <a href= "PáginasDeLeituraLivro.php?id=<?php echo $id; ?>"><img  id ="x14" src="<?php echo $pathcapa;?>" alt="Livro1"></a> 
        </div><br>
        
        <div class="container-fluid">
          <div class="row gx-3 mb-3">
             <div class="col-md-6">
                <h3 id="x17" class="quicksand-regular">
                  Sinopse:
                </h3>
                <h5 id="x17" class="quicksand-regular2">
                <?php echo $sinopse ?>
                </h5>
             </div>
            <div class="col-md-6">
              <h4 id="x19" class="quicksand-regular">
                Avaliação Geral:
              </h4>
              <h5 id="x19" class="quicksand-regular2">
                4.5/5
              </h5>
              <h6 id="x19" class="quicksand-regular2">
                x pessoas avaliaram
              </h6>
            </div>
          </div>
        <div class="row gx-3 mb-3">
           <div class="col-md-3">
            <h4 id="x17" class="quicksand-regular">
              Gênero
            </h4>
            <h6 id="x17" class="quicksand-regular2">
            <?php echo $genero; ?>
            </h6>
          </div>
          <div class="col-md-3">
            <h4 id="x17" class="quicksand-regular">
              Autor
            </h4>
            <h6 id="x17" class="quicksand-regular2">
            <?php echo $autor; ?>
            </h6>
          </div>
          <div class="col-md-3">
            <h4 id="x17" class="quicksand-regular">
              Ano de lançamento
            </h4>
            <h6 id="x17" class="quicksand-regular2">
            <?php echo $ano; ?>
            </h6>
          </div>
           
        </div>
        </div><br><br>
        <button href="ListasUser.php" class="btn btn-primary">Adicionar à sua lista</button><br><br>
        <button href="#" class="btn btn-primary">Avaliar</button><br><br>
        <div id="divLiv" class="container-fluid">
            <h1 class="quicksand-regular">
              Comentários
            </h1>
          </div><br>
        <div class="container">
    <div class="comment-section">
        <div class="mb-4">
            <div class="d-flex gap-3">
                <img src="profile picture.jpg" alt="User Avatar" class="user-avatar">
                <div class="flex-grow-1">
                    <textarea class="form-control comment-input" cols="60" rows="2" placeholder="Escreva um comentário"></textarea>
                    <div class="mt-3 text-end">
                        <button class="btn-comment">Comentar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comments List -->
        <div class="comments-list">
            <!-- Comment 1 -->
            <div class="comment-box">
                <div class="d-flex gap-3">
                <a href="PaginaDePerfil.php"><img src="profile picture.jpg" alt="User Avatar" class="user-avatar"></a>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 id="NomeComment" class="quicksand-regular2">Anna Beatriz</h6>
                            <span class="comment-time">2 hours ago</span>
                        </div>
                        <p class="mb-2">Que livro PÉSSIMO.</p>
                        <div class="comment-actions">
                            <a href="#"><i class="bi bi-heart"></i> <img id="IconComment" src="Icon curtida.png"></a>
                            <a href="#"><i class="bi bi-reply"></i><img id="IconComment" src="Reply.png"></a>
                        </div>
                    </div>
                </div>

                <!-- Reply Section -->
                <div class="reply-section mt-3">
                    <div class="comment-box">
                        <div class="d-flex gap-3">
                        <a href="PaginaDePerfil.php"><img src="profile picture.jpg" alt="User Avatar" class="user-avatar"></a>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h6 id="NomeComment" class="quicksand-regular2">Maria Rita</h6>
                                    <span class="comment-time">1 hora atrás</span>
                                </div>
                                <p class="mb-2">Discordo, gostei muito do livro.
                                </p>
                                <div class="comment-actions">
                                    <a href="#"><i class="bi bi-heart"></i> <img id="IconComment" src="Icon curtida.png"></a>
                                    <a href="#"><i class="bi bi-reply"></i><img id="IconComment" src="Reply.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comment 2 -->
            <div class="comment-box">
                <div class="d-flex gap-3">
                    <a href="PaginaDePerfil.php"><img src="profile picture.jpg" alt="User Avatar" class="user-avatar"></a>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 id="NomeComment" class="mb-0">Mariana Lima</h6>
                            <span class="comment-time">3 horas atrás</span>
                        </div>
                        <p class="mb-2">Que livro importante!</p>
                        <div class="comment-actions">
                            <a href="#"><i class="bi bi-heart"></i> <img id="IconComment" src="Icon curtida.png"></a>
                            <a href="#"><i class="bi bi-reply"></i><img id="IconComment" src="Reply.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<!--Nav lateral-->
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
              <a class="quicksand-regular2" href="configuracoes.php">Configurações</a><img id="config" src="configurações.png"><br><br>
              <a href="logout.php" class="quicksand-regular2">Sair</a><br><br>
            </div>
<!--Fim da nav lateral-->
          
              
  </div>
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
