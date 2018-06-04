<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desafio Citra Backend</title>

    <!-- JS dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/index.js" type="text/javascript"></script>
    <!-- CSS dependencies -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><i class="fas fa-user"></i> Conta </h1>
        <p class="lead">Procurar por contas existentes.</p>
      </div>
    </div>
    <div class="container-fluid" align="center">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <button id="optionSearch" class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Todos">Todos</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Todos</a>
            <a class="dropdown-item" href="#">Por Id</a>
            <a class="dropdown-item" href="#">Por Nome</a>
          </div>
        </div>
        <input id="inputSearch" type="text" class="form-control" aria-label="Pesquisar contas" placeholder="Pesquisar...">
        <div class="input-group-append">
          <button id="btnSearch" type="button" class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>
    <div id="listView" class="container-fluid" align="center">
    </div>
  </body>
</html>
