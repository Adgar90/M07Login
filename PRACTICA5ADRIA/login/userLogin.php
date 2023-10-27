<?php
    /* 
        Fa logging de l'usuari i retorna les seves dades en cas d'existir,
        sinó, retorna missatge de loging incorrecte.
        
        Realitzar query 'SELECT' per consultar les dades
    */
    include("../conn/db_connection.php");
        
    $passwd = $_POST['pwd'];
    $email = $_POST['mail'];

    try {
        $querySelect = "SELECT * FROM `user` WHERE password = '$passwd' and email = '$email';";
        $resultat = mysqli_query($conn, $querySelect);
    } catch (Exception $e) {
        print($e);
    }
?>