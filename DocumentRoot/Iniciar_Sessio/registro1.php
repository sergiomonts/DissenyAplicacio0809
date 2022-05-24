<?php session_start();
include ('login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="registro.css">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
</header>
<body>
    <div class="signup-form" >
        <form name="form" action="registro.php" method="post" id="formulario">
            <h2>Registro</h2>
            <p class="hint-text">Crea tu cuenta</p>
            <?php
      echo "$_SESSION['usuarioId']";
      ?>
            <div class="form-group">
                <div class="row">
                    
                    <div class="col">
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required="required">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="cognom1" id="cognom1" placeholder="Cognom1" required="required">
                    </div>
                    
                    <div class="col">
                        <input type="text" class="form-control" name="cognom2" id="cognom2" placeholder="Cognom2" required="required">
                    </div>

                
                </div>
            </div>

            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="grupClase" id="grupClase" placeholder="Grup de Clase" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="tipusUsuari" id="tipusUsuari" placeholder="ALUMNE o PROFESSOR" required="required">
            </div>
            <div class="form-group" id="grupo__password">
                <input type="password" class="form-control" name="contrasenya" id="password" placeholder="Password" required="required">
            </div>
            <div class="form-group" id="grupo__password2">
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required="required">
            </div>
            <div class="form-group">
                <label class="form-check-label">
                    <input type="checkbox" required="required"> I accept the
                    <a href="#">Terms of Use</a> &amp;
                    <a href="#">Privacy Policy</a>
                </label>
            </div>
            <div class="form-group">
                <button type="reset" class="btn btn-success btn-lg btn-block">Borrar</button>
                <button type="submit" class="btn btn-success btn-lg btn-block" id="submit">Registate Ahora</button>
                
            </div>
        </form>
        <div class="text-center" >Ya tienes cuenta?-->
            <a href="index.php">Sign in</a>
        </div>
    </div>
    <!--<script src="validar.js"></script>-->
</body>
