<?php

// Guardem 4 dades necessaries per fer la connexió amb la BBDD del servidor
    $db_host = "localhost";
    $db_nombre = "users";
    $db_usuario = "root";
    $db_passwd = "";

    $conn = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre );
   
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
      }

?>