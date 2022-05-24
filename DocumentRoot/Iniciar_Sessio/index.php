<?php
//include('security.php');
session_start();
?>
<!doctype html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Iniciar Sessió</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
   
<main class="form-signin">

  <form action="login.php" method="post">
    <img class="mb-4" src="../assets/brand/montsiaLogo.png" alt="" width="150" height="150">
    <h1 class="h3 mb-3 fw-normal">Inicia la sessió</h1>

    <div class="form-floating">
      <input name="mail_entra" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Correu electrònic</label>
    </div>
    <div class="form-floating">
      <input name="pass_entra" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Contrasenya</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recorda'm
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Inicia la sessió</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
  </form>
</main>


    
  </body>
</html>