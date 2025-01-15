<?php
include ('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
    
    if(strlen($_POST['email'])==0) {
        echo "Preencha seu email";
    } else if(strlen($_POST['senha'])==0) {
        echo "Preencha sua senha";
    } else {

        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: ".$conexao->error);

        $quantidade=$sql_query->num_rows;

        if($quantidade==1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['nomeusuario'] = $usuario['nomedeusuario'];

            if($_SESSION['id'] == 1) {
              header("Location: HomeAdm.php");
            } elseif ($_SESSION['id'] == 2) {
              header("Location: HomeAdm.php");
            } else {
              header("Location: Home.php");
            }            
            
        } else{
            echo "Falha ao logar! Email ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<meta charset lang="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
    <head>
        <title>Clube literário</title>
        <link rel="icon" type="image/x-icon" href="IconSite.png">
        <link rel='stylesheet' href="bootstrap-grid.css">
        <link rel='stylesheet' href="styles.css">
        <link rel='stylesheet' href="bootstrap copy.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Ahom&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        <script type="text/javascript" src="ClubeLiterarioProjetoFinal2.js"></script>
        <script type="text/javascript" src="bootstrap.bundle.min.js" ></script>
        
    </head>
<body class="bodyHome">
<!--Header-->
    <nav class="container-fluid">
                <ul class="row">
                  <a class="col-sm-4" href="ClubeLiterarioProjetoFinal.php" >
                    <img class="img-fluid" src="LogoSite3.png">
                  </a>
                  <li class="col-sm-2">
                    <a class="nav-link" href="QuemSomos.html">Quem somos?</a>
                  </li>
                    <li class="col-sm-2">
                      <a class="nav-link" href="InscrevaSe.php">Inscreva-se</a>
                    </li>
                    <li class="col-sm-2">
                      <button onclick="Entrar()" class="btn">Entre</button> 
                    </li>
                </ul>
    </div>   
    </nav>
    <hr class="container-fluid"><br>
  <!--Div a ser mostrada quando apertar o link de entrar-->
    <div class="container-fluid" id="x7"><br><br>
        <h1 class="quicksand-regular" id="Entrar">Entrar</h1>
      <form method="post" action="" class="quicksand-regular2">
          <label>E-mail:</label>
          <input class="form-control" type="text" name="email" placeholder="Nome">
          <br><br>
          <label>Senha:</label>
          <input class="form-control" type="password" name="senha" placeholder="senha123">
          <br><br>
          <button type="submit" value="Submit" class="btn btn-primary">Entrar</button><br><br>
          <button type="submit" value="Submit" class="btn btn-primary">Entrar com X<img id="x3" src="x-social-media-round-icon.png"></button><br><br>
          <button type="submit" value="Submit" class="btn btn-primary">Entrar com Google<img id="x4" src="google.png"></button>
    </div>
  <!--Fim-->
    <h1 class="quicksand-regular">
      Bem vindo(a) ao Clube Literário, seu campo de leitura mais acessível!
    </h1><br>
  <!--Carrossel de fotos para mostrar fots de livros, pessoas lendo, como é o site, etc. Po renquanto temos imagens teste-->
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
              <img id="x5" src="Carrossel2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="Carrossel3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="Carrossel2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="Carrossel3.png" class="d-block w-100" alt="...">
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
      <h3 class="quicksand-regular2">Leia, avalie e compartilhe! Para mais informações, nos conheça por <a id="aqui" class="quicksand-regular2" href="QuemSomos.html">aqui</a></h3><br>
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
