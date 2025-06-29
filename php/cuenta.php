<?php
    // Esto manejaría el tema de las sesiones
    // Si no hay una cuenta, entonces lo redirigimos a login
    // Si hay, entonces lo redirigimos al perfil de la cuenta
    header("Location: ../login.php");
    exit();
?>