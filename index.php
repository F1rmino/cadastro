<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <title>Cadastro</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuarios</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                      case "novo":
                        include("novo-usuario.php");
                      break;
                      case "listar":
                        include("listar-usuarios.php");
                      break;
                      case "salvar":
                        include("salvar-usuario.php");
                      break;
                      case "editar":
                        include("editar-usuario.php");
                        break;
                    default:
                    print "<h1> Bem Vindos! </h1>";

                     }
                 ?>
             </div>
        </div>
    </div>

   <!-- jQuery e Popper.js são necessários para os recursos do Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>