<?php
    // Esto manejaría el tema de las sesiones
    // Si no hay una cuenta, entonces lo redirigimos a login
    // Si hay, entonces lo redirigimos al perfil de la cuenta
    session_start();
    if (isset($_SESSION["logueado"])){
        header("Location: ../perfil.php");
    }
    else{
        header("Location: ../login.php");
    }
    exit();
?>
