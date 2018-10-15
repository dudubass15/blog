<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog do Eduardo - Contato</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS manual -->
    <link href="assets/css/starter-template.css" rel="stylesheet">
    <!-- CSS manual -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <!-- CSS manual Login-->
    <link href="assets/css/login.css" rel="stylesheet">
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
            <li class="active"><a href="contato.php">Contato</a></li>
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

      <h1 style="text-align: center;">Formulário para contato</h1>
      <hr><br>

      <form class="form-horizontal">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Nome Completo" name="nome">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="E-mail" name="email">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
          <div class="col-sm-10">
            <input type="tel" maxlength="16" class="form-control" id="inputEmail3" placeholder="(xx) x.xxxx-xxxx" name="telefone">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Mensagem</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name="mensagem"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Enviar</button>
          </div>
        </div>
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