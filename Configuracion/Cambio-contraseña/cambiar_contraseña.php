<?php 
session_start();
if(!empty($_SESSION['msj'])){
    $mensaje = $_SESSION['msj'];
}
include('../Validar/validar_admin.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
    <link rel="stylesheet" href="../../Vista/assets/css/bootstrap.css">
    <link rel="icon" href="../../Vista/assets/img/icon_page.png">
    <style>
        body{background: url(../../Vista/assets/img/fondo.jpg) no-repeat;background-size: cover;}
    </style>
</head>
<body>
<?php switch ($_SESSION['rol_ingreso']) {
    case 1:
        include('includes/navbar-admin.php');
        break;
    case 2:
        include('includes/navbar.php');
        break;
    }
?>
    <div class="container" style="margin-top:10%; width:30%;">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="background:#ffffffd0 !important">
            <div class="card-header">
                <h3 class="text-center card-title">Cambiar contraseña</h3>
            </div>
            <div class="row">
                
                <div class="card-body">

                    <form action="php/cambiar_contraseña.php" method="POST">
                        <div id="error"></div>
                        <div class="col-lg">
                            <label>Ingrese su contraseña:</label>
                            <input type="password" class="form-control"id="pass1"name="pass1" required>
                        </div>
                        <div class="col-lg">
                            <label>Ingrese la nueva contraseña:</label>
                            <input type="password" class="form-control" id="pass2" name="pass2" required>
                        </div>
                        <div class="col-lg">
                            <label>Verifique su contraseña:</label>
                            <input type="password" class="form-control" id="pass3" name="pass3" required>
                        </div>
                    </div>
                    <div class="card-fotter">
                        <div class="col-lg">
                            <button class="btn form-control" style="background-color:#57a639; color: white;">Cambiar contraseña</button>
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
    <script src="../../Vista/assets/js/bootstrap.js"></script>
    <script>
        error = document.getElementById('error');
        error.innerHTML = `
        <div style="text-align:center; background-color: #ff3b3bf0; padding:10px; border-radius:3px;">
            <span style=" color: white;font-size:15px; font-family: 'Quicksand', sans-serif;"><?php echo $mensaje ?></span>
        </div>
        `;
    </script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>