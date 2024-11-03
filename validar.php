<?php
session_start();
include 'assets/lib/config.php';

$ruc = $_POST['ruc'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$consulta = mysqli_query($conn, "SELECT * FROM usuarios WHERE ruc='$ruc' AND usuario='$usuario' AND contrasena='$contraseña'");
$filas = mysqli_num_rows($consulta);

if ($filas > 0) {
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("location:index.php");
} else {
    echo 
    '<script>
    alert("Los datos ingresados son invalidos");
    location.href="login.php";
    </script>
    ';
}

mysqli_free_result($consulta);
mysqli_close($conn);
?>