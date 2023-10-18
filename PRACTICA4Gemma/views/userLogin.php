<?php

include('db_connection.php');

if (isset($_POST['send'])){
    $pass = $_POST['passwd'];
    $email = $_POST['email'];
    $actiu = $_POST['active'];

    if ($actiu = 'si'){
        $actiu = 'True';
    }else{
        $actiu = 'False';
    }

    echo "$actiu";
    //Fem consulta query
    $consulta = SELECT * FROM `users` WHERE `email` = '$email';
 
    $paraularandom = 'hola';
    //Introduim les dades de consulta a la taula user
    $result = mysqli_query($conn, $consulta);
    var_dump($result);
    var_dump($paraularandom);

    // if(!$result){
    //     die("Query fail!");
    // }

    //header("Location: usuari.php");    
}
?>