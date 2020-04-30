<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="download_bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="download_bootstrap/css/global.css">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"> </script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
  /* NASCONDO INIZIALMENTE I BOTTONI*/
  .nascosto1{display:none;}
  .nascosto2{display:none;}
  .nascosto3{display:none;}
  .nascosto4{display:none;}
</style>
  <head>
    <meta charset="utf-8">
    <title>INDEX</title>
    <link rel="shortcut icon" type="image/png" href="IMG/Mini_Logo.png"/>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light"> <!-- Il colore è stato settato in boostrap.min.css in .bg-light-->
      <a class="navbar-brand" href="#">
        <img src="IMG/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          InDispensApp
      </a>
    </nav>
    <h1> SEI NELL'INDEX </h1>
    <input type="button" value="Chiudi Ripostiglio" class="nascosto1" onclick="chiudi1()">
    <p class="par1" id="pa1"> Ripostiglio </p>
    <input type="button" value="Chiudi Cantinetta vini" class="nascosto2" onclick="chiudi2()">
    <p class="par2" id="pa2"> Cantinetta vini </p>
    <input type="button" value="Chiudi Sgabuzzino" class="nascosto3" onclick="chiudi3()">
    <p class="par3" id="pa3"> Sgabuzzino </p>
    <input type="button" value="Chiudi Frigorifero" class="nascosto4" onclick="chiudi4()">
    <p class="par4" id="pa4"> Frigorifero </p>

    <script>
                    //APERTURA BOX
      $(document).ready(function(){
        //RIPOSTIGLIO
        $(".par1").click(function destra(){
          var p = $(".par1");
          var n = $(".nascosto1");
          p.animate({left: '300px'}, "slow");
          p.animate({height: '300px'}, "slow");
          p.animate({width: '300px'}, "slow");
          p.html("<p class='sega'>AGGIUNGI</p>");
          n.show();
        });
        //CANTINETTA VINI
        $(".par2").click(function(){
          var p = $(".par2");
          var n2 = $(".nascosto2");
          p.animate({left: '300px'}, "slow");
          p.animate({height: '300px'}, "slow");
          p.animate({width: '300px'}, "slow");
          p.html("<p class='sega'>AGGIUNGI</p>");
          n2.show();
        });
        //SGABUZZINO
        $(".par3").click(function(){
          var p = $(".par3");
          var n = $(".nascosto3");
          p.animate({left: '300px'}, "slow");
          p.animate({height: '300px'}, "slow");
          p.animate({width: '300px'}, "slow");
          p.html("<p class='sega'>AGGIUNGI</p>");
          n.show();
        });
        //FRIGORIFERO
        $(".par4").click(function(){
          var p = $(".par4");
          var n4 = $(".nascosto4");
          p.animate({left: '300px'}, "slow");
          p.animate({height: '300px'}, "slow");
          p.animate({width: '300px'}, "slow");
          p.html("<p class='sega'>AGGIUNGI</p>");
          n4.show();
        });
      });

              // CHIUSURA BOX
      //FUNZIONI DI CHIUSURA DEI BOX, RIPORTANO I VARI BOX A SINISTRA NASCONDENDO I BOTTONI
      //CHIUSURA RIPOSTIGLIO
      function chiudi1(){
        $(".nascosto1").click(function destra(){
          var p = $("#pa1");
          var p = $(".par1");
          var c = $(".nascosto1");
          var s = $(".agg1");
          p.animate({height: '65px'}, "slow");
          p.animate({width: '150px'}, "slow");
          p.animate({left: '0px'}, "slow");
          s.hide();//TOLGO LA SCRITTA AGGIUNGI
          p.html("Cantinetta vini"); //"RIMETTO" FORZATAMENTE LA SCRITTA CANTINETTA VINI
          c.hide();
        });
      }
      //CHIUSURA CANTINETTA VINI
      function chiudi2(){
        $(".nascosto2").click(function destra(){
          var p = $("#pa2");
          var c = $(".nascosto2");
          var s = $(".agg2");
          p.animate({height: '65px'}, "slow");
          p.animate({width: '150px'}, "slow");
          p.animate({left: '0px'}, "slow");
          s.hide();//TOLGO LA SCRITTA AGGIUNGI
          p.html("Cantinetta vini"); //"RIMETTO" FORZATAMENTE LA SCRITTA CANTINETTA VINI
          c.hide();
        });
      }
      //CHIUSURA SGABUZZINO
      function chiudi3(){
        $(".nascosto3").click(function destra(){
          var p = $("#pa3");
          var c = $(".nascosto3");
          var s = $(".agg3");
          p.animate({height: '65px'}, "slow");
          p.animate({width: '150px'}, "slow");
          p.animate({left: '0px'}, "slow");
          s.hide();//TOLGO LA SCRITTA AGGIUNGI
          p.html("Sgabuzzino"); //"RIMETTO" FORZATAMENTE LA SCRITTA SGABUZZINO
          c.hide();
        });
      }
      //CHIUSURA FRIGORIFERO
      function chiudi4(){
        $(".nascosto4").click(function destra(){
          var p = $("#pa4");
          var c = $(".nascosto4");
          var s = $(".agg2");
          p.animate({height: '65px'}, "slow");
          p.animate({width: '150px'}, "slow");
          p.animate({left: '0px'}, "slow");
          s.hide();//TOLGO LA SCRITTA AGGIUNGI
          p.html("Frigorifero"); //"RIMETTO" FORZATAMENTE LA SCRITTA FRIGORIFERO
          c.hide();
        });
      }
    </script>
  </body>
</html>
