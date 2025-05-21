<?php
    $creado = false;
    $renombrado = "";
    for ($i=1;$i<=4;$i++){
        if (file_exists("../galeria/" . strval($i) . ".jpg") == false)
        {
           $renombrado = strval($i) . ".jpg";
           $creado = true;
           break;
        }
    }
    if ($creado == true){
        $dir = "../galeria/";
        $archivo = $_FILES["archivo"];
        $info = pathinfo($archivo["name"]);

        $nombregenerado = strval(rand(0, 100000000000)) . ".jpg";

        if ($info["extension"] == "png"){
            $imagen = imagecreatefrompng($archivo["tmp_name"]);
            $nuevaimg = imagescale($imagen, 400, 200);
            $nuevaimg = imagejpeg($nuevaimg, $nombregenerado);
        }
        else{
            $imagen = imagecreatefromjpeg($archivo["tmp_name"]);
            $nuevaimg = imagescale($imagen, 400, 200);
            $nuevaimg = imagejpeg($nuevaimg, $nombregenerado);
        }

        rename($nombregenerado, $dir . $renombrado);
        echo "Imagen subida con éxito.";
    }
    else{
        echo "Todos los slots están ocupados.<br>Contacta a un administrador para que limpie la galería.";
    }
    // chdir("../galeria/");
?>