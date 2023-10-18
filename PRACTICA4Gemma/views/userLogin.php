<?php

include('db_connection.php');


    $pass = $_POST['passwd'];
    $email = $_POST['email'];
  
    //Fem consulta query
    $consulta = SELECT * FROM `users` WHERE `email` = '$email';
 
    //Introduim les dades de consulta a la taula user
    $result = mysqli_query($conn, $consulta);
    var_dump($result);
    var_dump($paraularandom);

    // if(!$result){
    //     die("Query fail!");
    // }

    header("Location: usuari.php");    

?>