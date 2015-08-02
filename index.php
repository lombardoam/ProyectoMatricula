<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sistema de Matrícula</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/verify.js" type="text/javascript"></script>
		<script src="js/notify-custom.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>

<!--login modal-->
<div id="loginModal" class="modal show background" tabindex="-1" role="dialog" aria-hidden="true"><br><br><br><br><br>
 <img src="img/logo-escudo-ujcv1.png" alt="" class="center-block img-medium">
  <h1 class="text-center big-text text-white lato-regular">Sistema de Matrícula</h1>
  <div class="modal-dialog" id="form">
  <div class="modal-content">
      <div class="modal-header">
          <h2 class="text-center">Por favor inicie sesión:</h2>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="login.php" method="post">
            <div class="form-group">
              <input class="form-control input-lg" placeholder="Nombre de Usuario" name="usuario" data-validate="required">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Contraseña" name="contra" data-validate="required">
            </div>
            <div class="form-group">
              <input class="btn btn-blue btn-lg btn-block" type="submit" value="Iniciar Sesión" id="form">
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <?php
            if(isset($_GET['error'])){
               echo "<script>
                  $.notify(
                     \"Error en el nombre de usuario o contraseña\",
                     { position:\"bottom-right\" }
                  );
                  </script>
               ";
            }
            if(isset($_GET['no_aut'])){
               echo "<script>
                  $.notify(
                     \"Por favor inicie sesión para continuar\",
                     { position:\"bottom-right\" }
                  );
                  </script>
               ";
            }
            if(isset($_GET['logout'])){
               echo "<script>
                  $.notify(
                     \"Sesión cerrada correctamente\", \"success\",
                     { position:\"bottom-right\" }
                  );
                  </script>
               ";
            }

          ?>
		  </div>
      </div>
  </div>
  </div>
</div>
	</body>
</html>
