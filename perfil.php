<?php
    session_start();
    if (isset($_GET["id"])){
        // Mostrar cuenta
    }
    else{
        if (isset($_SESSION["logueado"])){
            // Mostrar perfil propio
        }
        else{
            header("Location: ../login.php");
        }
    }
?>