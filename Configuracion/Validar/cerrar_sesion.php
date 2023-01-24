<?php
    session_start();
    $_SESSION['login'] = null;
    $_SESSION=[];

    session_destroy();
    echo"
        <script>
            alert('sesión cerrada con éxito!');
            location.href='../../index.php';
        </script>
    ";
?>