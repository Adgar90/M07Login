<?php

 include ("userLogin.php");
 $user = $result->fetch_assoc(); // guardem en un array els resultats de la query feta a userLogin.php
 

 if ($user["rol"]== "professorat"){  //mirem quin és el rol de l'usuari per mostrar la resposta correcta
   printf("Hello " .$user["name"]." you are a teacher!!"."<br><br>"."The list of users from the database is: "."<br>");
   
   while ($row = $resultTeachers->fetch_assoc()) { //com és una consulta amb varies files, es guarda en un array
      
      if ($row['rol']=="professorat" || $row['rol']=="alumnat"){ //evitem que el valor sigui null de rol per a que no doni problemes 
         
         printf("name and surname: " . $row['name']." ". $row['surname'] . "<br>");
      
      }
  
  }
   
 } else if ($user["rol"]== "alumnat") {
    
   printf("I'm a student"."<br>"."name: ".$user["name"]."<br>"."surname: ".$user["surname"]."<br>"."email: ".$user["email"]);
 
 } else { // si no forma part d'aquests dos rols no ens interessa que funcioni la pàgina, així que el tira a fora
  //  $message = "Login incorrecte.";

  //  $message_url = urlencode($message);
  //  header("Location: login.php?fail=$message_url");

  include "loginEN.html";
  echo "Login incorrect";
 }
 echo '<a href="eliminar_Cookie.php"> Delete cookie </a><br>';
 echo '<a href="index.php"> Go back to the language selector</a>';

?>
