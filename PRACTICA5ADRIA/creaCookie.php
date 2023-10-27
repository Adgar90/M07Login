<?php
    setcookie("lang",$_GET['idioma'], time()+3600);
    header("Location: mostraCookie.php");
?>