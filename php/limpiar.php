<?php
    // ESTO NO ESTÁ BIEN HECHO!!
    // En realidad, esto tendría que estar vinculado a una base de datos.

    // Array de usuarios
    $users = array("admin", "admin2"); 
    // Array de contraseñas
    $passwords = array("root", "root2"); 

    $PUser = $_POST["username"];
    $PPass = $_POST["password"];

    $Logueado = false;

    for ($i=0;$i<count($users);$i++){
        if ($PUser == $users[$i] && $PPass == $passwords[$i]){
            $Logueado = true;
        }
    }

    if ($Logueado){
        echo "Autenticación exitosa.<br>";
        for ($i=1;$i<=4;$i++){
            if (file_exists("../galeria/" . strval($i) . ".jpg") == true)
            {
                unlink("../galeria/" . strval($i) . ".jpg");
                echo strval($i) . ".jpg fue borrado con éxito.<br>";
            }
        }
        echo "<br><br>El proceso terminó.";
    }
    else{
        echo "Usuario o contraseña incorrectos.";
    }
?>