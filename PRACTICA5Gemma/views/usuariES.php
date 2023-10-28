<?php

 include ("userLogin.php");
 $user = $result->fetch_assoc(); // guardem en un array els resultats de la query feta a userLogin.php
 

 if ($user["rol"]== "professorat"){  //mirem quin és el rol de l'usuari per mostrar la resposta correcta
   printf("Hola " .$user["name"]." eres profesor!!"."<br><br>"."La lista de usuarios de la base de datos es: "."<br>");
   
   while ($row = $resultTeachers->fetch_assoc()) { //com és una consulta amb varies files, es guarda en un array
      
      if ($row['rol']=="professorat" || $row['rol']=="alumnat"){ //evitem que el valor sigui null de rol per a que no doni problemes 
         
         printf("nombre y apellido: " . $row['name']." ". $row['surname'] . "<br>");
      
      }
  
  }
   
 } else if ($user["rol"]== "alumnat") {
    
   printf("soy un alumno"."<br>"."nombre: ".$user["name"]."<br>"."apellido: ".$user["surname"]."<br>"."email: ".$user["email"]);
 
 } else { // si no forma part d'aquests dos rols no ens interessa que funcioni la pàgina, així que el tira a fora
  //  $message = "Login incorrecte.";

  //  $message_url = urlencode($message);
  //  header("Location: login.php?fail=$message_url");

  include "loginES.html";
  echo "Login incorrecto";
 }
 echo '<a href="eliminar_Cookie.php"> Eliminar cookie </a><br>';
 echo '<a href="index.php"> Volver a la seleccion de idioma</a>';
?>
