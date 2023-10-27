<?php
    $db_host = "localhost";
    $db_name = "users";
    $db_user = "root";
    $db_pwd = "";
    if (isset($_POST['send'])) {
        $conn = mysqli_connect($db_host, $db_user, $db_pwd, $db_name);
    }
?>