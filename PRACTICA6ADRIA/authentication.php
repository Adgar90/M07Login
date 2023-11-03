<?php
    /* 
        Fa logging de l'usuari i retorna les seves dades en cas d'existir,
        sinó, retorna missatge de loging incorrecte.
        
        Realitzar query 'SELECT' per consultar les dades
    */
    include("db_connection.php"); //include de la connexió
    session_start(); // inicia sessió
    if (isset($_POST['env'])) {   // comprova l'estat del botó d'enviar i en cas de variar procesa les dades següents
        $passwd = $_POST['pwd'];
        $email = $_POST['mail'];

        $querySelect = "SELECT * FROM `user` WHERE password = '$passwd' and email = '$email';";
        $resultat = mysqli_query($conn, $querySelect);
        $user = $resultat->fetch_assoc();
        if ($user['rol'] == 'professorat') { // assignació de les dades a la global $_SESSION segons el rol
            $_SESSION['name'] = $user['name'];
        } else {
            $_SESSION['name'] = $user['name'];
            $_SESSION['surname'] = $user['surname'];
            $_SESSION['email'] = $user['email'];
        }
    }
    function selectAll() { // funció que realitza una connexió amb les base de dades per mostrar la informació dels usuaris
        include("../db_connection.php");
        $select = "SELECT * FROM `user`;";
        $resposta = mysqli_query($conn, $select);
        return $resposta->fetch_all(MYSQLI_ASSOC);
    }
?>