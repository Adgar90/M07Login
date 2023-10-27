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
            echo 'Account registered correctly. <a href="../views/login_en.html">Log in</a>';
        } catch (Exception $e) {
            header("Location: ../views/form_en.html");
        }
    }
?>