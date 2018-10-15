<?php

//require '../blog/conexaoBD/banco.php';

?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog do Eduardo</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS manual -->
    <link href="assets/css/starter-template.css" rel="stylesheet">
    <!-- CSS manual -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <!-- CSS manual Login-->
    <link href="assets/css/login.css" rel="stylesheet">
    <!-- CSS manual Login-->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Blog do Eduardo</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="contato.php">Contato</a></li>
          </ul>
          <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
              <button type="submit" class="btn btn-dafault"><a href="login.php" id="button-login">Área Administrativa</a></button>
            </form>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav><br><br>

    <div class="container">

      <form class="form-signin" method="POST" action="models/login.php">
        <h2 class="form-signin-heading" style="text-align: center;">Faça seu Login</h2>
        <label for="inputEmail" class="sr-only">E-mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" name="email"  autofocus><br>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha" >
        <div class="checkbox">
          <label>
            <input type="checkbox" value="lembre-me"> Lembre-me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
      
      <hr>
      <footer id="rodape">
        <p>&copy; 2018 Company, Inc.</p>
      </footer>

    </div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  </body>
</html>