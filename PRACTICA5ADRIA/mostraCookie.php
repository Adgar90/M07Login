<?php 
    if (!$_COOKIE["lang"]) {
        header("Location: idioma.php");
    } else if ($_COOKIE["lang"] == "es") {
        header("Location: views/login_es.html");
    } else if ($_COOKIE["lang"] == "en") {
        header("Location: views/login_en.html");
    } else if ($_COOKIE["lang"] == "cat") {
        header("Location: views/login_cat.html");
    }
?>
<!-- 
    !$_COOKIE["lang"] ? header("Location: index.php); : ($_COOKIE["lang"] == "es" ? header("Location: spanish.html") : header("Location: english.html"));
-->