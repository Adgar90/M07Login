<?php
    
    include("db_connection.php");
    if (isset($_POST['send'])) { // comprova l'estat del botó i en cas de canviar procesa les dades
        
        // agafem les dades de la variable global $_POST i que pasem a través del form
        $id = $_POST['id'];
        $role = $_POST['rol'];
        $name = $_POST['nom'];
        $surname = $_POST['cognom'];
        $passwd = $_POST['passwd'];
        $email = $_POST['email'];
        $active = $_POST['actiu'];
        $active = ($active = 'on') ? true : false;

        try { // provem de fer la query
            $queryInsert = 'INSERT INTO user VALUES ('.$id.',\''.$role.'\',\''.$name.'\',\''.$surname.'\',\''.$passwd.'\',\''.$email.'\','.$active.')';
            mysqli_query($conn, $queryInsert);
            echo "Compte registrada correctament. <a href=\"views/login.html\">Inicia sessió</a>";
        } catch (Exception $e) {
            header("Location: views/index.html"); // en cas d'error et retorna a l'index
        }
    }
?>