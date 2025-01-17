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
    <link rel='stylesheet' href="styles1.css">
    <link rel='stylesheet' href="bootstrap copy2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Ahom&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="ClubeLiterarioProjetoFinal1.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js" ></script>
</head>
<body class="bodyRoxo">
      <nav class="container-fluid">
        <ul class="row">
          <a class="col-sm-3">
            <img id="x1" class="img-fluid" src="LogoSite3.png">
          </a>
          <li class="col-sm-2">
            <a class="nav-link" href="HomeAdm.php">Home</a>
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
        <!--<h1 class="quicksand-regular">Bem vindo ao Clube Literario, <?php echo $_SESSION['nome']; ?></h1><br>-->
        <!--Carrossel de fotos-->
        <div class="container-fluid">
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
              <a class="quicksand-regular2" href="QuemSomos.php">Quem Somos?</a><br><br>
              <a class="quicksand-regular2" href="paraLer.php">Minha lista</a><br><br>
              <a class="quicksand-regular2" href="avaliacoes.php">Avaliações</a><br><br>
              <a class="quicksand-regular2" href="configuracoes.php">Configurações</a><img id="config" src="configurações.png"><br><br>
              <a class="quicksand-regular2" href="FerramentasAdm.php">Ferramentas do Administrador</a><img id="config" src="configurações.png"><br><br>
              <a href="logout.php" class="quicksand-regular2">Sair</a><br><br>
            </div>
      <!--Fim nav lateral-->
      <div class="container-fluid" id="divCads"><br>
          <h2 class="quicksand-regular">
            Controle dos livros do sistema
          </h2>
          <div id="btn-group" class="btn-group">
            <button onclick="AdicionarLivros()" class="btn btn-secondary">Adicionar livros ao banco de dados</button><br><br>
            <button onclick="AlterarLivros()" class="btn btn-secondary">Alterar livros no banco de dados</button><br><br>
            <button onclick="ExcluirLivros()" class="btn btn-secondary">Excluir livros ao banco de dados</button><br><br>
          </div>
          <br><br>
      </div>
      <!-- Formukário para o Administrador adicionar livros ao sistema-->
      <div class="container-fluid" id="cadLivro"><br><br>
        <h1 class="quicksand-regular" id="CadastroLivros">Cadastrar Livro</h1><br>
        <form method="post" action="cadastroLivros.php" class="quicksand-regular2" enctype="multipart/form-data">
        <div class="row gx-3 mb-3">
          <div class="col-md-3">
            <label>Nome do Livro</label>
            <input class="form-control" type="text" name="nomelivro" placeholder="Nome">
            <br><br>
          </div>
          <div class="col-md-3">
            <label>Gênero</label>
            <input class="form-control" type="text" name="genero" placeholder="Romance, Aventura, Suspense...">
            <br><br>
          </div>
          <div class="col-md-3">
            <label>Autor</label>
            <input class="form-control" type="text" name="autor" placeholder="Autor">
            <br><br>
          </div>
          <div class="col-md-3">
            <label>Ano de Lançamento</label>
            <input class="form-control" type="number" name="ano" placeholder="Ano">
            <br><br>
          </div>
        </div>
        <div class="row gx-3 mb-4">
          <div class="col-md-3">
            <label>Número de Páginas</label>
            <input class="form-control" type="number" name="numPag" placeholder="Numero de Paginas">
            <br><br>
          </div>
          <div class="col-md-3">
            <label>ISBN</label>
            <input class="form-control" type="text" name="isbn" placeholder="ISBN">
            <br><br>
          </div>
          <div class="col-md-3">
            <label>Sinopse (limite 1500 caracteres)</label>
            <input class="form-control" type="text" name="capa">
            <br><br>
          </div>
          <div class="col-md-3">
            <label>Qual a nacionalidade do livro?</label>
            <input class="form-control" type="text" name="capa">
            <br><br>
          </div>
        </div>
        <div class="row gx-3 mb-4">
          <div class="col-md-6">
            <label>Capa do Livro (insira um link do google com a imagem da capa)</label>
            <input class="form-control" type="text" name="arquivo">
            <br><br>
          </div>
          <div class="col-md-6">
            <label>Arquivo PDF do livro</label>
            <input class="form-control" type="file" name="arquivo">
            <br><br>
          </div>
        </div>
            <button type="submit" value="Submit" class="btn btn-primary">Cadastrar o Livro</button><br><br>
      </form>
        
    </div>

    <!-- Formukário para o Administrador alterar livros ao sistema-->
    <div class="container-fluid" id="updateLivro"><br><br>
        <h1 class="quicksand-regular" id="AlterarLivro">Alterar Livro</h1>
        <form method="post" action="alterarLivros.php" class="quicksand-regular2" enctype="multipart/form-data">
            <label>Entre com o nome do livro no qual deseja realizar alterações</label>
            <input class="form-control" type="text" name="nomeLivro" placeholder="Nome do livro que deseja atualizar">
            <br><br>
            <div class="row gx-3 mb-3">
          <div class="col-md-3">
            <label>Nome do Livro</label>
            <input class="form-control" type="text" name="nomelivro" placeholder="Nome">
            <br><br>
          </div>
          <div class="col-md-3">
            <label>Gênero</label>
            <input class="form-control" type="text" name="genero" placeholder="Romance, Aventura, Suspense...">
            <br><br>
          </div>
          <div class="col-md-3">
            <label>Autor</label>
            <input class="form-control" type="text" name="autor" placeholder="Autor">
            <br><br>
          </div>
          <div class="col-md-3">
            <label>Ano de Lançamento</label>
            <input class="form-control" type="number" name="ano" placeholder="Ano">
            <br><br>
          </div>
        </div>
        <div class="row gx-3 mb-4">
          <div class="col-md-3">
            <label>Número de Páginas</label>
            <input class="form-control" type="number" name="numPag" placeholder="Numero de Paginas">
            <br><br>
          </div>
          <div class="col-md-3">
            <label>ISBN</label>
            <input class="form-control" type="text" name="isbn" placeholder="ISBN">
            <br><br>
          </div>
          <div class="col-md-3">
            <label>Sinopse (limite 1500 caracteres)</label>
            <input class="form-control" type="text" name="capa">
            <br><br>
          </div>
          <div class="col-md-3">
            <label>Qual a nacionalidade do livro?</label>
            <input class="form-control" type="text" name="capa">
            <br><br>
          </div>
        </div>
        <div class="row gx-3 mb-4">
          <div class="col-md-6">
            <label>Capa do Livro (insira um link do google com a imagem da capa)</label>
            <input class="form-control" type="file" name="arquivo">
            <br><br>
          </div>
          <div class="col-md-6">
            <label>Arquivo PDF do livro</label>
            <input class="form-control" type="file" name="arquivo">
            <br><br>
          </div>
        </div>
            <button type="submit" value="Submit" class="btn btn-primary">Alterar o Livro</button><br><br>
        </form>
    </div>
</body>
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
</html>
