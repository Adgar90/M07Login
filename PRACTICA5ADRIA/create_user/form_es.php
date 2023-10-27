<?php
    include("../conn/db_connection.php");
    if (isset($_POST['send'])) { 
        
        $id = $_POST['id'];
        $role = $_POST['rol'];
        $name = $_POST['nom'];
        $surname = $_POST['cognom'];
        $passwd = $_POST['passwd'];
        $email = $_POST['email'];
        $active = $_POST['actiu'];
        $active = ($active = 'on') ? true : false;

        try { 
            $queryInsert = 'INSERT INTO user VALUES ('.$id.',\''.$role.'\',\''.$name.'\',\''.$surname.'\',\''.$passwd.'\',\''.$email.'\','.$active.')';
            mysqli_query($conn, $queryInsert);
            echo 'Cuenta registrada correctamente. <a href="../views/login_es.html">Inicia sesión</a>';
        } catch (Exception $e) {
            header("Location: ../views/form_es.html");
        }
    }
?>