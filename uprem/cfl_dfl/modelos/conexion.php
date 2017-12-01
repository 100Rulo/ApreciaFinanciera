<?php
$link = mysqli_connect("localhost", "root", "", "uprem");

if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

if (!mysqli_set_charset($link, "utf8")) {
    // printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($link));
    exit();
} else {
    // printf("Conjunto de caracteres actual: %s\n", mysqli_character_set_name($link));
}

// mysqli_close($conexion);

?>
