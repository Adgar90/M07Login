<?php
    include("../login/userLogin.php");
    
     
    $user = $resultat->fetch_assoc();
    if($user != null) { 
        if ($user["rol"] == "professorat") {
            echo "<p>Hola ".$user["name"]." eres profesor!!</p>";
            echo "<p>La lista de usuarios de la base de datos es:</p>";
            foreach (selectAll() as $value) {
                echo "nombre y apellido: ".$value["name"]." ".$value["surname"]."<br>";
            }
            
        } else {
            echo "<p><strong>soy un alumno<br>";
            echo "nombre: ".$user["name"]."<br>";
            echo "apellido: ".$user["surname"]."<br>";
            echo "email: ".$user["email"]."</strong></p>";
        }
        echo '<a href="../idioma.php">Idioma</a><br>';
        echo '<a href="../borraCookie.php">Borrar cookie</a>';
    } else {
        include("login_es.html"); 
        echo "Login incorrecto<br>";
    }

    
    function selectAll() {
        include("../conn/db_connection.php");
        $select = "SELECT * FROM `user`;";
        $resposta = mysqli_query($conn, $select);
        return $resposta->fetch_all(MYSQLI_ASSOC);
    }
?>