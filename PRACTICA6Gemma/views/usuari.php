<?php
 include ("autentication.php");

  echo '<h1> SESSIÓ INICIADA';

 if ($_SESSION["rol"]== "professorat"){  //mirem quin és el rol de l'usuari per mostrar la resposta correcta
   printf("<h1> BENVINGUT/DA ".$_SESSION['rol']." ".$_SESSION['name']."</h1><br"."Hola " .$_SESSION["name"]." ets professor!!"."<br><br>"."La llista d'usuaris de la base de dades és: "."<br>");
   
   while ($row = $resultTeachers->fetch_assoc()) { //com és una consulta amb varies files, es guarda en un array
      
      if ($row['rol']=="professorat" || $row['rol']=="alumnat"){ //evitem que el valor sigui null de rol per a que no doni problemes 
         
         printf("nom i cognom: " . $row['name']." ". $row['surname'] . "<br>");
      
      }
  
  }
   
 } else if ($_SESSION["rol"]== "alumnat") {
    
   printf("<h2> BENVINGUT/DA ".$_SESSION['rol']." ".$_SESSION['name']."</h2><br"."soc un alumne"."<br>"."nom: ".$_SESSION["name"]."<br>"."cognom: ".$_SESSION["surname"]."<br>"."email: ".$_SESSION["email"]);
 
 } else { // si no forma part d'aquests dos rols no ens interessa que funcioni la pàgina, així que el tira a fora

  include "login.html";
  echo "Login incorrecte";
 }

 echo '<br> <a href="delete_session.php"> Elimina la sessió </a>';

?>


