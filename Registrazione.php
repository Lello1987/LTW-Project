<!DOCTYPE html>
<link rel="stylesheet" href="download_bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="download_bootstrap/css/global.css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<!-- <script type="text/javascript" src="checkLogin.js"></script> -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> InDispensApp</title>
    <link rel="shortcut icon" type="image/png" href="IMG/Mini_Logo.png"/>
  </head>
  <body>
    <?php //INTERROGAZIONE AL DATABASE
      session_start();
      $user = "";
      $pwd = "";
      $messUser = "";
      $messPwd = "";
      $messPwd2 = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") { //in questo modo non parte il controllo subito appena si richiama la pagina
        $user = $_POST["user"];
        $_SESSION["user"] = $user;
        $pwd = $_POST["pwd"];
        $pwd2 = $_POST["pwd2"];
        if(empty($_POST["user"])){ //CONTROLLA SE IL CAMPO USERNAME VIENE LASCIATO VUOTO
          $messUser = "Campo Username obbligatorio";
        }
        if(empty($_POST["pwd"])){ //CONTROLLA SE IL CAMPO USERNAME VIENE LASCIATO VUOTO
          $messPwd = "Campo Password obbligatorio";
        }
        if($pwd != $pwd2){ //CONTROLLA SE LE DUE PASSWORD CORRISPONDONO
            $messPwd2 = "Le due password non corrispondono";
        } else { // SE E' CONTROLLA SE è VALIDO O ERRATO
        //------------------------------------------------------------------------
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "Dispensa";

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          // Check connection
          if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
          }

          $sql = "INSERT INTO Login (`username`, `password`) VALUES ('$user','$pwd')";
          $result = mysqli_query($conn, $sql);
          if ($result) {
              header("location: HomePage.php"); //REGISTRAZIONE EFFETTUATA CON SUCCESSO REINDIRIZZATO NELLA HOME PAGE
          } else {
              $messUser = "Errore utente già registrato";
          }
          mysqli_close($conn);
        }
      }

     ?>
    <nav class="navbar navbar-light bg-light"> <!-- Il colore è stato settato in boostrap.min.css in .bg-light-->
      <a class="navbar-brand" href="#">
        <img src="IMG/Logo.png" width="30" height="30" class="d-inline-block align-left" alt="">
          InDispensApp
      </a>
    </nav>

    <section class="container-fluid">
      <section class="row justify-content-center">
        <section class="col-12 col-sm-9 col-md-3">
          <form class="form-container" method="post" name="login" id="form" action="<?php echo $_SERVER["PHP_SELF"] ?>">
            <p style="text-align:center; font-size:40px; font-family:Impact, Charcoal, sans-serif; color:#1d70b7"> Form di Registrazione </p>
            <!-- USERNAME -->
            <div class="form-group">
              <h5 style="color:red"> <?php echo $messUser ?> </h5>
              <label class="required"> Username  </label> <!-- La classe inserisce l'asterisco rosso per attributi necessari -->
              <input type="username" name="user" class="form-control" required >
            </div>
            <!-- PASSWORD -->
            <div class="form-group">
              <h5 style="color:red"> <?php echo $messPwd ?> </h5>
              <label class="required"> Password </label> <!-- La classe inserisce l'asterisco rosso per attributi necessari -->
              <input type="password" name="pwd" class="form-control" required pattern="[A-Za-z0-9_-]{8,16}" >
            </div>
            <!-- CONTROLLA PASSWORD-->
            <div class="form-group">
              <h5 style="color:red"> <?php echo $messPwd2 ?> </h5>
              <label class="required"> Inserisci di nuovo la password </label> <!-- La classe inserisce l'asterisco rosso per attributi necessari -->
              <input type="password" name="pwd2" class="form-control" required pattern="[A-Za-z0-9_]{8,16}" >
            </div>
            <!--
            SE VOLGIAMO IMPLEMENTARE IL "RICORDAMI"
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            -->
            <p> <a href="Login.php"> Sei gi&agrave un utente? Accedi </a> </p>
            <input type="submit" class="btn btn-primary btn-block" style="color:#f0cc0a" value="Registrazione"></input>
          </form>
        </section>
      </section>
    </section>

  </body>

</html>
