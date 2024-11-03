<?php
session_start();
$session_iniciada = $_SESSION['usuario'];

if($session_iniciada != ""){
    header("location:login.php");
}
?>