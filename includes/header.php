<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" href="./img/PHP.ico">
  </head>
<body>

<nav class="navbar navbar-expand-lg mb-3 text-bg-primary p-3">
  <div class="container-fluid ">
    <a class="navbar-brand" href="index.php" >
      <img src="./img/PHP.png" alt="" style="width: 70px">
    </a>

    <form  class="d-flex" action="search.php" method="POST">

          <input class="form-control me-2" placeholder="Comercio" aria-label="Search" name="resultado">

          <input class="btn btn-outline-info" type="submit" name="busqueda" value="enviar"></input>
    
    </form>

  </div>
</nav>

    
    