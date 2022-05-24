<?php 
include('../security.php');
include('dbconn.php');

 ?>
<!doctype html>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Panell de control d'incidencies</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      } 
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php">Equip 3</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form class="user" action="../..\Iniciar_Sessio\logout.php" method="POST">
        <button class="btn-lg btn-block" type="submit" name="logout_btn" >Tanca Sessio</button>
      <!--<a class="nav-link px-3" href="../..\Iniciar_Sessio\logout.php">Tanca la sessió</a>-->
    </form>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="incidencies.php">
              <span data-feather="file"></span>
              Incidencies
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portatils.php">
              <span data-feather="bar-chart-2"></span>
              Portatils per Aula
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="discdur.php">
              <span data-feather="bar-chart-2"></span>
              Disc Durs Averiats
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pcalumne.php">
              <span data-feather="bar-chart-2"></span>
              Ordinadors per Alumne
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gestio.php">
              <span data-feather="users"></span>
              Gestió
            </a>
          </li>
          

    
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <br>
      <h2>Dashboard Professors</h2>
      <div class="table-responsive">
        Hola
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

