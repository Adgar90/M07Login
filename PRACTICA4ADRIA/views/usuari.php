<?php
    include("../userLogin.php");
    
     
    $user = $resultat->fetch_assoc();
    if($user != null) { 
        if ($user["rol"] == "professorat") {
            echo "<p>Hola ".$user["name"]." ets professor!!</p>";
            echo "<p>La llista d'usuaris de la base de dades és:</p>";
            foreach (selectAll() as $value) {
                echo "nom i cognom: ".$value["name"]." ".$value["surname"]."<br>";
            }
            
        } else {
            echo "<p><strong>soc un alumne<br>";
            echo "nom: ".$user["name"]."<br>";
            echo "congom: ".$user["surname"]."<br>";
            echo "email: ".$user["email"]."</strong></p>";
        }
    } else {
        include("login.html"); 
        echo "Login incorrecte";
    }

    function selectAll() {
        include("../db_connection.php");
        $select = "SELECT * FROM `user`;";
        $resposta = mysqli_query($conn, $select);
        return $resposta->fetch_all(MYSQLI_ASSOC);
    }
?>