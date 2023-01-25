<?php
include('../controlador/PassController.php');
session_start();
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$pass3 = $_POST['pass3'];
$id = $_SESSION['id_ingreso'];
$mensaje = null;

$cambio = new PassModel();
$data = $cambio->read($id);
for($n = 0; $n <count($data); $n++){
    $contra = $data[$n]['contraseña'];
}
if(!$data==null){
    if(password_verify($pass1,$contra)){
        if(!$pass1 == "" && !$pass2 == "" && !$pass3 == ""){
            if($pass2===$pass3){
                $password = password_hash($pass2, PASSWORD_DEFAULT);
                /* $SQL2 = "UPDATE `persona` SET `contraseña`='$password' WHERE id = '$id';";
                $query2 = mysqli_query($conexion,$SQL2); */
                $update_pass = array(
                    'update_id' => $id,
                    'update_pass' => $password);
                $prueba = $cambio->update($update_pass);
                if($prueba==''){
                    echo"
                        <script>
                            alert('contraseña cambiada correctamente!');
                            location.href = '../../../index.php';
                        </script>
                    ";
                }
            }else{
                $mensaje = "Verifique que su contraseña";
                header('location: ../cambiar_contraseña.php');
            }
        }else{
            $mensaje = "Alerta: Rellene todos los campos";
            header('location: ../cambiar_contraseña.php');
        }
    }else{
        $mensaje = "Error: su contraseña actual está errada";
        header('location: ../cambiar_contraseña.php');
    }
}
$_SESSION['msj'] = $mensaje;

?>