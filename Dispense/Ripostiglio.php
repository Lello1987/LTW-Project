<?php
// Start the session
  session_start();
?>

<!DOCTYPE html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/global.css">
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

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "IndispensApp";
      $us = $_SESSION["user"];
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "SELECT scadenza,nome,tipoMisura,quantita,categorieP FROM Prodotti WHERE utente = '$us' AND CategorieD = 'Ripostiglio'";
      $result = mysqli_query($conn, $sql);

      echo "<table border='5'>";
      while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
        echo "<tr>";
        foreach($row as $value) {
          echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    ?>

  </body>

</html>
