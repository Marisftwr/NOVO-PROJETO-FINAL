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
    <script type="text/javascript" src="ClubeLiterarioProjetoFinal2.js"></script>
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
              <a class="quicksand-regular2" href="FerramentasAdm.php">Ferramentas do Administrador</a><img id="config" src="configurações.png"><br><br>
              <a href="logout.php" class="quicksand-regular2">Sair</a><br><br>
            </div>
      <!--Fim nav lateral-->
      <div class="container-fluid" id="divLivros"><br>
          <h2 class="quicksand-regular">
            Controle dos livros do sistema
          </h2>
          <button onclick="AdicionarLivros()" class="btn">Adicionar livros ao banco de dados</button><br><br>
          <button onclick="AlterarLivros()" class="btn">Alterar livros no banco de dados</button><br><br>
          <button onclick="ExcluirLivros()" class="btn">Excluir livros ao banco de dados</button><br><br>
      </div>
      <!-- Formukário para o Administrador adicionar livros ao sistema-->
      <div class="container-fluid" id="cadLivro"><br><br>
        <h1 class="quicksand-regular" id="Entrar">Entrar</h1>
        <form method="post" action="" class="quicksand-regular2">
            <label>Nome do Livro</label>
            <input class="form-control" type="text" name="nomelivro" placeholder="Nome">
            <br><br>
            <label>Gênero</label>
            <input class="form-control" type="text" name="genero" placeholder="Romance, Aventura, Suspense...">
            <br><br>
            <label>Autor</label>
            <input class="form-control" type="text" name="autor" placeholder="Autor">
            <br><br>
            <label>Ano de Lançamento</label>
            <input class="form-control" type="number" name="ano" placeholder="Ano">
            <br><br>
            <label>Número de Páginas</label>
            <input class="form-control" type="number" name="numPag" placeholder="Numero de Paginas">
            <br><br>
            <label>ISBN</label>
            <input class="form-control" type="text" name="isbn" placeholder="ISBN">
            <br><br>
            <label>Capa do Livro</label>
            <input class="form-control" type="text" name="capa" placeholder="Romance, Aventura, Suspense...">
            <br><br>
            <label>Arquivo PDF do livro</label>
            <input class="form-control" type="file" name="arquivo">
            <br><br>
            <button type="submit" value="Submit" class="btn btn-primary">Cadastrar o Livro</button><br><br>
        </form>
    </div>
    <!--PHP de cadastro de livros-->
    <?php
    session_start();
    include("conexao.php");

    $nome = mysqli_real_escape_string($conexao, trim($_POST['nomelivro']));
    $genero = mysqli_real_escape_string($conexao, trim($_POST['genero']));
    $autor = mysqli_real_escape_string($conexao, trim($_POST['autor']));
    $ano = mysqli_real_escape_string($conexao, trim($_POST['ano']));
    $numPag = mysqli_real_escape_string($conexao, trim($_POST['numPag']));;
    $isbn = mysqli_real_escape_string($conexao, trim($_POST['isbn']));;
    $capa = mysqli_real_escape_string($conexao, trim($_POST['capa']));;
    $arquivo = mysqli_real_escape_string($conexao, trim($_POST['arquivo']));;

    $sql = "select count(*) as total from usuarios where nomedeusuario = '$usuario' ";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 1){
        $_SESSION['usuario_existe'] = TRUE;
        header('Location: InscrevaSe.php');
        exit;
    }

    $sql = "INSERT INTO usuarios (nomedeusuario, nome, dataNasc, email, senha, data_cadastro) VALUES ('$usuario', '$nome', '$datanasc', '$email', '$senha', NOW())";

    if($conexao->query($sql) === TRUE){
        $_SESSION['status_cadastro'] = TRUE;
    }

    $conexao->close;
    header('Location: FerramentasAdm.php');
    exit;
    ?>
</body>
          
