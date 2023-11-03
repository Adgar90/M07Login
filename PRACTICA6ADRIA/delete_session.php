<!-- fer dues proves
    primer fer-ho només amb session_destroy() per veure com encara la session conté dades
    i després fer-ho amb session_unset() per veure com destrueix tot
-->

<?php
    session_start(); // inicia la sessió ja creada
    // session_unset();
    session_destroy(); // destrueix la sessió que haviem creat previament
    // echo $_SESSION["name"]." i ".$_SESSION["password"];
    header("Location: views/login.html"); // redirigeix al login.html
?>