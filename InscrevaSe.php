<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscreva-se</title>
    <link rel='stylesheet' href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Ahom&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap copy.css">
    <link rel="stylesheet" href="bootstrap-grid.css"> 
</head>
<!--Modificar seriamente-->
<!--Problema: IncrevaSe.php só funciona diretamente no htdocs, e não possui permissão quando está dentro da pasta do trabalho-->
<body class="bodyInsc"><br><br>
    <hr class="container-fluid"><br><br>
    <div class="container-fluid">
    <div class="Insc">
    <h1 class="quicksand-regular">Inscreva-se</h1>
    <form method="post" action="cadastro.php" class="quicksand-regular2">
        <label>Nome:</label>
        <input class="form-control" type="text" name="Name" placeholder="Nome">
        <br><br>
        <label>Data de Nascimento:</label>
        <input id="Dt" class="form-control" type="date" name="DataNasc"><br><br>
        <label>E-mail:</label>
        <input class="form-control" type="text" name="Email" placeholder="nomeemail@email.com">
        <br><br>
        <label>@username:</label>
        <input class="form-control" type="text" name="Username" placeholder="@nomedeusuario">
        <br><br>
        <label>Senha:</label>
        <input class="form-control" type="password" name="Senha" placeholder="senha123">
        <br><br>
        <button type="submit" value="Submit" class=" btn btn-primary">Inscrever-se</button><br><br>
        <button type="submit" value="Submit" class="btn btn-primary">Inscrever-se com X<img id="x3" src="x-social-media-round-icon.png"></button>
        <button type="submit" value="Submit" class="btn btn-primary">Inscrever-se com G<img id="x4" src="google.png"></button>

        
    </form><br>
        <button type="submit" value="Submit" class=" btn btn-primary">Inscrever-se</button>
    </div>
    </div>

    <br><br>
    <hr class="container-fluid">
    
</body>
</html>
