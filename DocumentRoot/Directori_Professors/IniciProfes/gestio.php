<?php 
//Inclou fitxers php
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
    <title>Panell de control</title>

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
        <button class=" btn-lg btn-block"  type="submit" name="logout_btn" >Tanca Sessio</button>
      <!--<a class="nav-link px-3" href="../..\Iniciar_Sessio\logout.php">Tanca la sessió</a>-->
    </form>
    </div>
  </div>
</header>
<!--Navegador entre webs-->
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
            <a class="nav-link active" href="gestio.php">
              <span data-feather="users"></span>
              Gestió
            </a>
          </li>    
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <br>
      <h1>Gestió</h1>
      <div class="signup-form" >
        <!-- Formulari per crear comptes d'usuari -->        
        <form name="form" action="registreAlumne.php" method="post" id="formulario">
            <h3>Registre d'Usuari</h3>
            <p class="hint-text">Crea el Compte</p>
            <div class="form-group">
                <div class="row"> 
                    <div class="col">
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required="required">
                    </div>
                    <br>
                    <div class="col">
                        <input type="text" class="form-control" name="cognom1" id="cognom1" placeholder="Cognom1" required="required">
                    </div>
                    <br>
                    <div class="col">
                        <input type="text" class="form-control" name="cognom2" id="cognom2" placeholder="Cognom2" >
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="grupClase" id="grupClase" placeholder="Grup de Clase" required="required">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="tipusUsuari" id="tipusUsuari" placeholder="ALUMNE o PROFESSOR" required="required">
            </div>
            <br>
            <div class="form-group" id="grupo__password">
                <input type="password" class="form-control" name="contrasenya" id="password" placeholder="Password" required="required">
            </div>
            <br>
            <div class="form-group">
                <!--Botó que borra els camps introduits-->
                <button type="reset" class="btn btn-success btn-lg btn-block">Borrar</button>
                <!--Botó que envia el formulari-->
                <button type="submit" class="btn btn-success btn-lg btn-block" id="submit">Registate Ahora</button>
                
            </div>
        </form>
    </div>
    <br>
    

    <div class="signup-form" >
      <!-- Formulari per crear incidencies -->
        <form name="form" action="registreIncidencia.php" method="post" id="formulario">
            <h3>Registre Incidencia</h3>
            <p class="hint-text">Crea l'incidencia</p>
            <div class="form-group">
            <div class="form-group">
                <input type="text" class="form-control" name="informacio" id="informacio" placeholder="Informació" required="required">
            </div>
            <br>
                <div class="row">                    
                    <div class="col">
                        <input type="text" class="form-control" name="idAlumne" id="idAlumne" placeholder="Id d'Alumne" required="required">
                    </div>
                    <br>
                    <div class="col">
                        <input type="text" class="form-control" name="idDispositiu" id="idDispositiu" placeholder="Id del Dispositiu" required="required">
                    </div>
                    <br>
                    <div class="col">
                        <input type="text" class="form-control" name="idEstat" id="idEstat" placeholder="Id d'estat" >
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="dataOberta" id="dataOberta" placeholder="Data ej: 2022-02-02" required="required">
                    </div>
                </div>
            </div>
            
            <br>
            <div class="form-group">
                <!--Botó que borra els camps introduits-->
                <button type="reset" class="btn btn-success btn-lg btn-block">Borrar</button> 
                <!--Botó que envia el formulari-->
                <button type="submit" class="btn btn-success btn-lg btn-block" id="submit">Registrar Incidencia</button>
            </div>
            <br>
        </form>
    </div> 
    <div class="signup-form" >
        <!--Formulari per crear material-->
        <form name="form" action="registreMaterial.php" method="post" id="formulario">
            <h3>Registre Material</h3>
            <p class="hint-text">Crea el Material</p>
            <div class="form-group">
            
                
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="idTipus" id="idTipus" placeholder="Tipus de Material" required="required">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="etiquetaDepInf" id="etiquetaDepInf" placeholder="Etiqueta de Departament" >
                    </div>
                    <br>
                    <div class="col">
                        <input type="text" class="form-control" name="numSerie" id="numSerie" placeholder="Numero de Serie">
                    </div>
                    <br>
                    <div class="col">
                        <input type="text" class="form-control" name="macEthernet" id="macEthernet" placeholder="MAC d'ethernet" >
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="macWifi" id="macWifi" placeholder="Mac de Wifi" >
                    </div>
                </div>
                <br>
                <div class="row">
                <div class="col">
                        <input type="text" class="form-control" name="SACE" id="SACE" placeholder="SACE" ">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="dataAdquisicio" id="dataAdquisicio" placeholder="Adquisició ej: 2020-04-12" required="required">
                    </div>
                    <br>
                    <div class="col">
                        <input type="text" class="form-control" name="idUbicacio" id="idUbicacio" placeholder="Ubicació" required="required">
                    </div>
                </div>
            </div>
            
            <br>
            <div class="form-group">
                <!--Botó que borra els camps introduits-->
                <button type="reset" class="btn btn-success btn-lg btn-block">Borrar</button>
                <!--Botó que envia el formulari-->
                <button type="submit" class="btn btn-success btn-lg btn-block" id="submit">Registrar Material</button>
            </div>
            <br>
        </form>
    </div>     
    </main>
  </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>



