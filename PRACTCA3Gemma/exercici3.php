
<?php 
//Exercici que genera inserts en una BBDD de PHPMYADMIN
   
//Guardem la cadena de conexió
$db_host = "localhost";
    $db_name = "users";
    $db_user = "root";
    $db_passwd = "";

    if (isset($id,$rol,$name,$surname,$password,$email,$active)) {
    // Fem la conexió amb la base de dades
    $connection = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

    // Fem un post de la info donada des del formulari 
    $id = $_POST['id'];
    $rol = $_POST['rol'];
    $name =$_POST['name'];
    $surname =$_POST['surname'];
    $password =$_POST['password'];
    $email =$_POST['email'];
    $active =$_POST['active'];

    //Fem la QUERY de l'insert 
        $query = "INSERT INTO USERS VALUES ('.$id', \''.$rol'\', \''.$name'\', \''.$surname'\', \''.$password'\', \''.$email'\', '.$active')";
        $resultat = mysqli_query($connection,$query);
        echo 'Ha anat bé la query';
    }

?>