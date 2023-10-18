<?php
    
    $db_host = "localhost";
    $db_name = "Users";
    $db_user = "root";
    $db_pwd = "";
    if (isset($_POST['send'])) { // corregit isset() -> ha de comprovar l'estat del submit
        $conn = mysqli_connect($db_host, $db_user, $db_pwd, $db_name);
        $id = $_POST['id'];
        $role = $_POST['rol'];
        $name = $_POST['nom'];
        $surname = $_POST['cognom'];
        $passwd = $_POST['passwd'];
        $email = $_POST['email'];
        $active = $_POST['actiu'];
        $active = ($active = 'on') ? true : false;

        $queryInsert = 'INSERT INTO user VALUES ('.$id.',\''.$role.'\',\''.$name.'\',\''.$surname.'\',\''.$passwd.'\',\''.$email.'\','.$active.')';
        mysqli_query($connect_db, $query_insert);
        echo "Query insertada correctament.";
    }
    header ('exercici3.html');
?>