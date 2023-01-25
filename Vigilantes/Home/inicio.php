<?php session_start();
$nombreCompleto = $_SESSION['nombre_ingreso']." ".$_SESSION['apellido_ingreso'];
include('../../Configuracion/Validar/validar_sesion.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro de articulos</title>
        <link rel="icon" href="../../Vista/assets/img/icon_page.png">
        <link href="../Vista/css/styles.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Vista/styles/responsive.css">
        <link rel="stylesheet" href="../../Vista/assets/css/bootstrap.css">
    <!-- Estilos de la caja xD -->    
    <style>
        .submit-hv:hover{
            background-color: #47a386;
        }
    </style>
    </head>
    <body class="sb-nav-fixed">        
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #57a639;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#" style="color: white;"><img src="../../Vista/assets/img/logo_sena_blanco.png" height="60" alt="Logo de la pagina" /></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <a  style="margin-right:15px; margin-left:85%; color:white;" class="nav-link dropdown-toggle " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../../configuracion/cambiar_contraseña.php">Cambiar Contraseña</a></li> 
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="../../Configuracion/Validar/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color:#57a639;">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading" style="color: white;">INICIO</div>
                            <a style="color: white;" class="nav-link" href="#">
                                <div class="sb-nav-link-icon" style="color: white;"><i class="fas fa-tachometer-alt"></i></div>
                                INICIO
                            </a>    
                            <div class="sb-sidenav-menu-heading" style="color: white;">Principal</div>
                            <a class="nav-link" href="DASHBOARD.php" style="color: white;">
                                <div class="sb-nav-link-icon" style="color: white;"><i class="fas fa-chart-area"></i></div>
                                Registro de Articulos
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="standar">Conectado como: <br> <?php echo $nombreCompleto."."; ?></div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <div class="container-fluid px-12ks">
                    <div class="row">
                        <div class="caja"> 
                            <div class="col-lg-12">
                                <!-- titulo -->
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
                            </div>
                            <div class="col-lg-12">
                                <!-- contenido -->
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
                            <div style="margin-top:9%;">
                                <footer class="py-4 bg-light mt-auto">
                                    <div class="container px-12">
                                        <div class="d-flex align-items-center justify-content-between standar">
                                            <div class="text-muted">Copyright &copy; Hecho por Jesús Rueda y Jesús Mosquera</div>
                                            <div>
                                                <a href="#">Privacy Policy</a>
                                                &middot;
                                                <a href="#">SENA</a>
                                                &middot;
                                                <a href="#">Terms &amp; Conditions</a>
                                            </div>
                                        </div>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="../../Vista/assets/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
        <!-- <script src="../Vista/assets/demo/chart-area-demo.js"></script>
        <script src="../Vista/assets/demo/chart-bar-demo.js"></script>
        <script src="../Vista/assets/demo/chart-pie-demo.js"></script> -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="../Vista/js/scripts.js"></script>
    </body>
</html>
