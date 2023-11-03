<?php
    $db_host = "localhost";
    $db_name = "users";
    $db_user = "root";
    $db_pwd = "";
    try { // prova realitzar la connexió a la base de dades o emet missatge d'error
        $conn = mysqli_connect($db_host, $db_user, $db_pwd, $db_name);
    } catch (Exception $e) {
        echo"". $e->getMessage();
    }
?>