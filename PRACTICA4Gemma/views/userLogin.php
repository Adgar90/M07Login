<?php

include('../db_connection.php');
    

    $pass = $_POST['passwd'];
    $email = $_POST['email'];
    $rol_user = $_POST['rol'];
    //Fem consulta query
    $query = "SELECT  * FROM `users` WHERE `email` = '$email' AND `password` = '$pass'"; //query per mirar que loguegi bé
    
    //Introduim les dades de consulta a la taula user
   $result = mysqli_query($conn, $query);
    
    $queryTeachers = "SELECT * FROM `users`"; //query per mostrar la llista d'usuaris
    
    $resultTeachers = mysqli_query($conn, $queryTeachers);
    
    
     

?>