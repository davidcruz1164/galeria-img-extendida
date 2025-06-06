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

    $archivos = scandir("../galeria/");

    if (file_exists("../galeria/Test.txt")){
        $total_archivos = count($archivos) - 3;
    }
    else{
        $total_archivos = count($archivos) - 2;
    }


    for ($i=0;$i<count($users);$i++){
        if ($PUser == $users[$i] && $PPass == $passwords[$i]){
            $Logueado = true;
        }
    }

    if ($Logueado){
        echo "Autenticación exitosa.<br>";
        for ($i=1;$i<=$total_archivos;$i++){
            if (file_exists("../galeria/" . strval($i) . ".jpg") == true)
            {
                unlink("../galeria/" . strval($i) . ".jpg");
                unlink("../galeria/fullsize/" . strval($i) . ".jpg");
                echo strval($i) . ".jpg fue borrado con éxito.<br>";
            }
            else{
                echo strval($i) . ".jpg no existe!";
            }
        }
        echo "<br><br>El proceso terminó.";
    }
    else{
        echo "Usuario o contraseña incorrectos.";
    }
?>
