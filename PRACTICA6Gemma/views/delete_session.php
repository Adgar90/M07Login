<?php
    session_start();
    session_unset(); //elimina variables SESSION
    session_destroy(); //elimina SESSION


    header('Location:login.html');
?>