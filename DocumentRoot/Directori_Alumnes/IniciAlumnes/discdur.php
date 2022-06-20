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
    <title>Disc Durs Personals</title>

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
        <!--Navegador que canvia de pagines-->
        <button class="btn-lg btn-block"  type="submit" name="logout_btn" >Tanca Sessio</button>
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
            <a class="nav-link" aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          <li class="nav-item">
            <a class="nav-link" href="PC.php">
              <span data-feather="bar-chart-2"></span>
              PC
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="discdur.php">
              <span data-feather="bar-chart-2"></span>
              Disc Dur
            </a>
          </li>    
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <br>
      <h2>Disc Durs Personals</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
          <tr>
              <th scope="col">Id Material</th>
              <th scope="col">Tipus de Material</th>
              <th scope="col">Model Disc Dur</th>
              <th scope="col">Departament o General</th>

            </tr>
          </thead>
          <tbody>
            <?php
            //Conexio a la base de dades            
            $conn = conn();

            //Guardant en variable la sessio creada al fer login
            $correu = $_SESSION['usuarioAl'];

            //Consulta a la base de dades 
            $sql = "SELECT Material.id, TipusMaterial.tipus, TipusMaterial.model, TipusMaterial.origen FROM Material 
                    INNER JOIN Assignacions ON Assignacions.idMaterial = Material.id 
                    INNER JOIN TipusMaterial ON TipusMaterial.id = Material.idTipus 
                    INNER JOIN Usuaris ON Usuaris.id = Assignacions.idAlumne 
                    WHERE TipusMaterial.id = 1 AND Usuaris.correu = '$correu'";
            
            //Emmagatzema la consulta en una variable
            if($result = $conn->query($sql)){

                //Comprova que el resultat te almenys una linia                
                if ($result->num_rows > 0){

                    //Bucle que converteix result en un array d'objectes
                    //i guarda les files en obj, despres es mostra en 
                    //columnes d'una taula                    
                    while ($obj = $result->fetch_object()){                        
                      echo "<tr>";
                      echo "<td>$obj->id</td>";
                      echo "<td>$obj->tipus</td>";
                      echo "<td>$obj->model</td>";
                      echo "<td>$obj->origen</td>";
                      echo "</tr>";
                    }
                }
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

