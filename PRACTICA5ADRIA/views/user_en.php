<?php
    include("../login/userLogin.php");
    
     
    $user = $resultat->fetch_assoc();
    if($user != null) { 
        if ($user["rol"] == "professorat") {
            echo "<p>Hello ".$user["name"]." you're teacher!!</p>";
            echo "<p>The list of the users from the database is:</p>";
            foreach (selectAll() as $value) {
                echo "name and surname: ".$value["name"]." ".$value["surname"]."<br>";
            }
            
        } else {
            echo "<p><strong>soc un alumne<br>";
            echo "name: ".$user["name"]."<br>";
            echo "surname: ".$user["surname"]."<br>";
            echo "email: ".$user["email"]."</strong></p>";
        }
    } else {
        include("login_en.html"); 
        echo "Wrong login<br>";
    }
    
    echo '<a href="../idioma.php">Language</a><br>';
    echo '<a href="../borraCookie.php">Delete cookie</a>';

    function selectAll() {
        include("../conn/db_connection.php");
        $select = "SELECT * FROM `user`;";
        $resposta = mysqli_query($conn, $select);
        return $resposta->fetch_all(MYSQLI_ASSOC);
    }
?>