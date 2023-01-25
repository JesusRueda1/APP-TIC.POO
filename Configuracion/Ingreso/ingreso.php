<?php
require('modelo/LoginController.php');
session_start();
$_SESSION['login'] = true;
$user = $_POST['username']; 
$pass = $_POST['password']; 
if(!$user=="" && !$pass==""){
    $login = new LoginController();
    $data = $login->read_document($user);

    if(!$data==null){
        for($n = 0; $n <count($data); $n++){
                $id = $data[$n]['id'];
                $name = $data[$n]['nombre'];
                $apellido = $data[$n]['apellido'];
                $pass2 = $data[$n]['contraseña'];
                $rol = $data[$n]['rol'];  
        }
        

            if(password_verify($pass, $pass2)){
                // Codigo para entrar 
            
                $_SESSION['id_ingreso'] = $id;
                $_SESSION['nombre_ingreso'] = $name;
                $_SESSION['apellido_ingreso'] = $apellido;
                $_SESSION['rol_ingreso'] = $rol;

                switch ($rol) {
                    case 1:
                        header('location: ../../Administrativa/Home/index.php');
                        break;
                    case 2:
                        header('location: ../../Vigilantes/Home/inicio.php'); 
                        break;
                    default:
                        echo "
                        <script>
                            alert('Error: no tiene rol asignado, comuniquese con el administrador!');
                            location.href='../../index.php';
                        </script>    
                        ";
                        break;
                }
            }else{
                echo "
                    <script>
                        alert('Contraseña incorrecta, intente nuevamente!!');
                        location.href='../index.php';
                    </script>
                    ";
            }
    }else{
        echo "
        <script>
            alert('El usuario no existe en el sistema');
            location.href='../index.php';
        </script>";
    }
}else{
    echo "
    <script>
        alert('Error: Los campos están vacios, llene todos los campos para ingresar!!');
        location.href='../index.php';
    </script>"; 
}

?>