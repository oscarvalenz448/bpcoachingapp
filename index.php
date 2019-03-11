<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="bp2/production/images/logo.png">
    <title> BP Coaching APP </title>

    <!-- Bootstrap -->
    <link href="bp2/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="bp2/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="bp2/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="bp2/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="bp2/build/css/custom.min.css" rel="stylesheet">
    <!--Css stratego-->
  </head>

  <body class="login">

    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="bp2/production/validar/php/login_valida.php">
              <br><br>
              <img src="bp2/production/images/logo.png" id="img_logo" width="30%">
              <h2 style="color: #344d97; font-size: 24px;" >BP Coaching App</h2>
              <br><br>
              <h2 style="color: #344d97; font-size: 30px;" >Iniciar sesión</h2>
              <br>
              <div>
                <input type="text" class="form-control" placeholder="Correo" id="username" name="username" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password"  required />
              </div>
              <div>
               <button type="submit" class="btn submit btn-block" style="background-color: #48A821; color: white; font-size: 18px;">Accesar</button>
              <br>
              <a  href="front_recovery.php" style="color: #73879C;">¿Olvidaste tu contraseña?</a><BR>
              <a  href="bp2/production/registrocoach.php" style="color: #73879C;">¿No tienes cuenta? Regístrate aquí</a>
              <!-- <a class="btn btn-default submit" href="index.html">Acceso</a>-->


              </div>

              <div class="clearfix"></div>

              <div class="separator">

                  <!-- a href="#signup" class="to_register" style="color: #73879C;"> Crear Cuenta </a-->
                </p>

                <div class="clearfix"></div>
                <br />

                <div>

                  <p style="color: #73879C;" >BP Coaching App Derechos Reservados</p>

                </div>
              </div>
            </form>
          </section>
        </div>
<?php session_start(); ?>
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="POST" action="bp2/production/validar/php/registro_valida.php" enctype="multipart/from-data">
              <h1 style="color: #73879C;">Crear Cuenta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Nombre Usuario " id="username" name="username" required="" />
              </div>
                <div>
                <input type="text" class="form-control" placeholder="Nombre Completo" id="fullname" name="fullname" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Correo" id="email" name="email" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Dirección " id="region" name="region" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" required="" />
              </div>
                <div>
                <input type="password" class="form-control" placeholder="Confirmar Contraseña" id="confirm_password" name="confirm_password" required="" />
              </div>
              <!--
               <div>
                <input type="file" class="" id="texto_p" name="imagenperfil" required="" />
              </div>
              -->
              <div>
                <button type="submit" class="btn btn-default submit">Registrar</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link" id="texto_p">Ya eres miembro?
                  <a href="#signin" class="to_register" style="color: #73879C;"> Accesar </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                <h1 style="color: #73879C;"><!--<i class="fa fa-paw"></i>--> BP Coaching APP</h1>
                  <p style="color: #73879C;" >©2017 Derechos Reservados</p>

                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <script src="bp2/production/validar/js/valida_registro.js"></script>
  </body>
</html>
