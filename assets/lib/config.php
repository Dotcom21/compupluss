<?php
$conn = mysqli_connect("localhost","root","","compupluss"); //conexio a mysql ("127.0.0.1","user bd","clave bd","name bd")

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* cambiar el conjunto de caracteres a utf8 */
if (!mysqli_set_charset($conn, "utf8mb4")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conn));
    exit();
} else {
   // printf("Conjunto de caracteres actual: %s\n", mysqli_character_set_name($conn));
}

?>