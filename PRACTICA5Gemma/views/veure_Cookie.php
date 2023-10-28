<?php
    if (!$_COOKIE["language"]){
        header ("Location: index.php");
    } else if ($_COOKIE["language"] == "cat"){
        header("Location: login.html");
    } else if ($_COOKIE["language"] == "es"){
        header("Location: loginES.html");
    } else if ($_COOKIE["language"] == "en"){
        header("Location: loginEN.html");
    }
?>