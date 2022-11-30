<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo date("HmdHis").rand(0,99999)?>">
  </head>
<body>


  <header class="container-fluid">
    <div class="row">
    <div class="col-lg-4 text-center mt-5">
      <img src="./img/gaveta off2.png" alt="">
    </div>

    <div class="col-lg-4 col-12 mt-3">
        <h2>Gaveta <br> Esportiva </h2>
    </div>

    <div class="col-lg-4 col-12 text-center mt-5">
        <input type="text" name="" id="" placeholder="Pesquisar">
    </div>
    </div>

<!-- menu com dropdown -->
    <ul class="nav nav-pills justify-content-center col-lg-12 col-12">
  <li class="nav-item badge-warning">
    <a class="nav-link" href="index.php">Main Menu</a>
  </li>
  <li class="nav-item dropdown badge-warning">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Notícias</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="basquete.php">Basquete</a>
      <a class="dropdown-item" href="IEMRioMajorNews.php">IEM Rio Major 2022</a>

      <a class="dropdown-item" href="preconvoca.php">Pré-Convocação</a>

      <a class="dropdown-item" href="#">Something else here</a>
      <a class="dropdown-item" href="Convocados.php">Convocados para o Copa do Mundo</a>

    </div>
  </li>
  <li class="nav-item dropdown badge-warning">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Crônicas</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="copa.php">Copa do Mundo</a>
    </div>
  </li>
  <li class="nav-item dropdown badge-warning">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Artigos de Opinião</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="artcopa.php">Artigo copa</a>
      <a class="dropdown-item" href="artigoF1.php">Artigo F1</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </li>
</ul>

  </header>


