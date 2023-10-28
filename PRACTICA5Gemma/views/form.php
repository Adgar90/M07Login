<?php

include('../db_connection.php'); //importem la cadena de connexió 

if (isset($_POST['send'])){ //mirem que l'usuari hagi donat a send perquè sinò cada vegada que refresquem es faria l'insert
    $id = $_POST['id'];
    $nom = $_POST['name'];
    $cognom = $_POST['surname'];
    $rol_user = $_POST['ROL'];
    $pass = $_POST['passwd'];
    $email = $_POST['email'];
    $actiu = $_POST['active'];

    if ($actiu == 'si'){ //al ser boolea un checkbox hem de mirar si es true o false
        $actiu = 'True';
    }else{
        $actiu = 'False';
    }


    //Fem consulta query
    $consulta = "INSERT INTO `users`(`ID`, `NAME`, `SURNAME`, `ROL`, `PASSWORD`, `EMAIL`, `ACTIVE`) VALUES ('$id', '$nom', '$cognom', '$rol_user', '$pass', '$email', $actiu)";

    
    //Introduim les dades de consulta a la taula user
    $result = mysqli_query($conn, $consulta);

       
    if(!$result){
        die("Query fail!"); //si falla que pari
    } else {
        include "form.html";
        echo "La inserció és correcte."; //enviem el missatge desitjat

      
     }
       
}
?>