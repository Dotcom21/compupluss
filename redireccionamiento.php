<?php
$session_iniciada = $_SESSION['usuario'];

if($session_iniciada == null || $session_iniciada == ""){
    echo '
    <script>
    alert("No tiene sesión activa");
    location.href="login.php";
    </script>
    ';
    die();
}
?>