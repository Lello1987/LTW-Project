<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="download_bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="download_bootstrap/css/global.css">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"> </script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php
// Start the session
  session_start();
?>

  <head>
    <meta charset="utf-8">
    <title>INDEX</title>
    <link rel="shortcut icon" type="image/png" href="IMG/Mini_Logo.png"/>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- Il colore è stato settato in boostrap.min.css in .bg-light-->
      <a class="navbar-brand" href="#">
        <img src="IMG/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          InDispensApp
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="HomePage.php">Dispense</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categorie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Prodotti</a>
          </li>

        </ul>
      </div>
      <a href='Login.php'>Esci</a>
    </nav>
    <div class="row">
      <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="dispensa" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Dispensa</a>
          <a class="nav-link" id="ripostiglio" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Ripostiglio</a>
          <a class="nav-link" id="cantinetta" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="true">Cantinetta vini</a>
          <a class="nav-link" id="frigorifero" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="true">Frigorifero</a>
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"> <p id="zonaDinamicaDispensa"> </p> </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"> <p id="zonaDinamicaRipostiglio"> </p> </div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"> <p id="zonaDinamicaCantinetta"> </p> </div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"> <p id="zonaDinamicaFrigorifero"> </p> </div>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function(){
        $("#dispensa").click(function(){
          $("#zonaDinamicaDispensa").load("Dispense/Dispensa.php");
        });

        $("#ripostiglio").click(function(){
          $("#zonaDinamicaRipostiglio").load("Dispense/Ripostiglio.php");
        });

        $("#dispensa").click(function(){
          $("#zonaDinamicaCantinetta").load("Dispense/Cantinetta.php");
        });

        $("#dispensa").click(function(){
          $("#zonaDinamicaFrigorifero").load("Dispense/Frigorifero.php");
        });
      });
    </script>
    <br>

  </body>
</html>
