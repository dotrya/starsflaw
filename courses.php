<?php
  include('db/connexionDB.php'); // Fichier PHP contenant la connexion à la BDD
  session_start();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/deathstarw.png">
    <title>S'inscrire</title>
  </head>

  <body>
    <?php require_once('menu.php'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="group col-sm-0">
          </br>
          </br>
          <h1>Cours</h1>
          </br>
        </div>
      </div>
    </div>

    <!-- BUG RESPONSIVE A CORRIGER -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="group col-sm-100">
          <div class="poster">
            <a href="courses/vsftpd.php" style="text-decoration:none">
              <div class="card mb-3" style="width: 60rem; border: 3px solid #1e272e!important">
                <div class="row no-gutters">
                  <div class="col-lg-4">
                    <img src="images/metasploit.jpg" class="img-fluid" width="150" height="150">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-muted">Vulnérabilité de ports</h6>
                      <h5 class="card-title" style="color: black">VSFTPD</h5>
                      <p class="card-text" style="color: black">Découvrez comment obtenir un shell avec les droits root sur un hôte-cible en utilisant Nmap et Metasploitable.</p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    
    
  </body>
</html>