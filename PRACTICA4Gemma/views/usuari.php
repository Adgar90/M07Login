<?php

 include ("userLogin.php");
 $user = $result->fetch_assoc(); // guardem en un array els resultats de la query feta a userLogin.php
 

 if ($user["rol"]== "professorat"){  //mirem quin és el rol de l'usuari per mostrar la resposta correcta
   printf("Hola " .$user["name"]." ets professor!!"."<br><br>"."La llista d'usuaris de la base de dades és: "."<br>");
   
   while ($row = $resultTeachers->fetch_assoc()) { //com és una consulta amb varies files, es guarda en un array
      
      if ($row['rol']=="professorat" || $row['rol']=="alumnat"){ //evitem que el valor sigui null de rol per a que no doni problemes 
         
         printf("nom i cognom: " . $row['name']." ". $row['surname'] . "<br>");
      
      }
  
  }
   
 } else if ($user["rol"]== "alumnat") {
    
   printf("soc un alumne"."<br>"."nom: ".$user["name"]."<br>"."cognom: ".$user["surname"]."<br>"."email: ".$user["email"]);
 
 } else { // si no forma part d'aquests dos rols no ens interessa que funcioni la pàgina, així que el tira a fora
  //  $message = "Login incorrecte.";

  //  $message_url = urlencode($message);
  //  header("Location: login.php?fail=$message_url");

  include "login.html";
  echo "Login incorrecte";
 }

?>


