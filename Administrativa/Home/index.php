<?php session_start();
 include('../../Configuracion/Validar/validar_admin.php'); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>INICIO-SENA</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../../Vista/assets/img/icon_page.png">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="Vista/css/styles.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="../../Vista/assets/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="../../Vista/assets/css/bootstrap.css">
        <script src="../../Vista/assets/js/bootstrap.min.js"></script>
    </head>
    <body>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg" style="background-color: #57a639; margin: left 50%; color:white ;" >
            <div class="container px-12">
                <a class="navbar-brand" href="#" style="color: white;"><img src="../../Vista/assets/img/logo_sena_blanco.png" height="50" alt="Logo de la pagina"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active"  style="color: white;" aria-current="page" href="CRUD.php">Personal</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: white;" href="Pages/articulos.php">Articulos</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: white;" href="Pages/añadirRoles.php">Roles</a></li>
                    </ul>
                </div>
            </div>
            <a style="margin-right:15px;" class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../../configuracion/Cambio-contraseña/cambiar_contraseña.php">Cambiar contraseña</a></li> 
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="../../Configuracion/Validar/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
            
        </nav>
 
        <div class="container px-4 px-lg-5">
         
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://www.barranquilla.gov.co/wp-content/uploads/2019/08/img_4237-768x512.jpg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">SENA</h1>
                    <p>El Servicio Nacional de Aprendizaje - SENA, es un establecimiento público del orden nacional, con personería jurídica, patrimonio propio e independiente, y autonomía administrativa; Adscrito al Ministerio del Trabajo de Colombia.</p>
                    <p>“El SENA es nuestra estrella y tiene que seguir alumbrando”</p>
                
                </div>
            </div>
           
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0"></p></div>
            </div>
        
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">El SENA</h2>
                            <p class="card-text">Entrega recursos de hasta 50 millones de pesos con la tasa de interés más baja del mercado a empresas en etapa temprana del país, uno de los emprendedores colombianos beneficiados de este programa es Andrés Moncada, creador de Hans Sachs.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="https://www.sena.edu.co/es-co/noticias/lists/noticias/histrico%20noticias.aspx">Verifica inormacion</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">VACACIONES DE NAVIDAD Y SEMANA SANTA</h3>
                            <p class="card-text">De Navidad: del 23 de diciembre de 2021 al 6 de enero de 2022, ambos inclusive. De Semana Santa: del 9 de abril al 17 de abril de 2022, ambos inclusive. De Verano: Se iniciarán el día 27 de junio y terminarán el día anterior al comienzo del curso 2022-2023.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="https://www.infobae.com/america/colombia/2022/02/04/atencion-estas-son-las-fechas-para-inscribirse-en-clases-presenciales-del-sena/">Verifica informacion</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">¿Cuánto tiempo dura un técnico en el SENA?</h3>
                            <p class="card-text">El nivel de Tecnólogo tiene una duración una duración en etapa lectiva de 3120 horas (21 meses) y etapa productiva 864 horas (6 meses) para un total de 3984 horas (27 meses), equivalente a 83 créditos.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="https://normograma.sena.edu.co/docs/concepto_sena_0082806_2019.htm">Verifica informacion</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="Vista/js/scripts.js"></script>
        
    </body>
</html>
