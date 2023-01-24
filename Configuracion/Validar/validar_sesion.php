<?php
if (!isset($_SESSION['login']) && $_SESSION['login'] == null){
    header('location:../../index.php');
}
?>