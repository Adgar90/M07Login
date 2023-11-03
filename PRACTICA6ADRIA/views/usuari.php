<?php
    include("../authentication.php"); // include de la pàgina d'autenticació  
    if($user != null) { // comprova que les dades siguin correctes
        echo "<h1>Sessió iniciada</h1>";
        
        if ($user['rol'] == "professorat") { // comprova el rol de l'usuari
            echo "<h2>Benvingut/da professor/a, ".$_SESSION['name']."</h2>";
            echo "<p>La llista d'usuaris de la base de dades és:</p>";
            foreach (selectAll() as $value) { // mostra les dades de la base de dades
                echo "nom i cognom: ".$value["name"]." ".$value["surname"]."<br>";
            } 
        } else { 
            echo "<h2>Benvingut/da alumne, ".$_SESSION['name']."</h2>";
            echo "nom: ".$_SESSION['name']."<br>";
            echo "congom: ".$_SESSION['surname']."<br>";
            echo "email: ".$_SESSION['email']."</strong></p>";
        }
        echo '<a href="../delete_session.php">Tancar sessió</a>'; // link per tancar la sessió que redirecciona a delete_session.php
    } else { // en cas d'error al loguear, torna a login i mostra missatge d'error
        include("login.html"); 
        echo "Login incorrecte";
    }
?>