<?php
    // TODO TOTAL:
    // - más chequeos de sanidad (tamaño mínimo)
    // - mostrar mensajes de error más claros
    // - soporte para gifs

    error_reporting(E_ERROR | E_PARSE);

    $creado = false;
    $renombrado = "";
    $archivos = scandir("../galeria/");

    $mensaje = ""; // mensaje para el final
    
    // Por si existe el test.txt o no
    if (file_exists("../galeria/Test.txt")){
        $total_archivos = count($archivos) - 3;
    }
    else{
        $total_archivos = count($archivos) - 2;
    }

    $renombrado = strval($total_archivos) . ".jpg";
    $dir = "../galeria/";
    $fullsize = "../galeria/fullsize/";

    $archivo = $_FILES["archivo"];
    $info = pathinfo($archivo["name"]);

    $nombregenerado = strval(rand(0, 100000000000)) . ".jpg";

    // chequeos de sanidad
    list($x, $y) = getimagesize($archivo["tmp_name"]);
    $tamaño = filesize($archivo["tmp_name"]);

    if ($x > 300 and $y > 300 and $tamaño < 5228792){
        if ($info["extension"] == "png"){
            $imagen = imagecreatefrompng($archivo["tmp_name"]);
        }
        else{
            $imagen = imagecreatefromjpeg($archivo["tmp_name"]);
        }
        if (!$imagen){
            $mensaje = "La imagen está corrupta o no es válida";
        }
        else{
            $mensaje = "Imagen subida con éxito";
            $nuevaimg = imagescale($imagen, 400, 300);
            $nuevaimg = imagejpeg($nuevaimg, $nombregenerado);
            $fullsizeimg = imagejpeg($imagen, $renombrado);

            rename($renombrado, $fullsize . $renombrado);
            rename($nombregenerado, $dir . $renombrado);
        }
    }
    else{
        if ($x < 300 or $y < 300){
            $mensaje = "La imagen debe tener una resolución mínima de 300x300 píxeles";
        }
        else if ($tamaño > 5228792){
            $mensaje = "El tamaño de la imagen debe ser menor a 5.2 MBs";
        }
    }
    // chdir("../galeria/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <nav>
        <h1>test</h1>
        <ul>
            <li><a href="../galeria.php?pag=1">Galería</a></li>
            <li><a href="../subir.html">Subir</a></li>
        </ul>
    </nav>
    <header>
        <?php
            echo "<h1>" . $mensaje . "</h1>";
        ?>
    </header>
</body>
</html>
