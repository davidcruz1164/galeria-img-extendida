<?php
    $creado = false;
    $renombrado = "";
    $archivos = scandir("../galeria/");
    
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

    if ($info["extension"] == "png"){
        $imagen = imagecreatefrompng($archivo["tmp_name"]);
        $nuevaimg = imagescale($imagen, 400, 300);
        $nuevaimg = imagejpeg($nuevaimg, $nombregenerado);
        $fullsizeimg = imagejpeg($imagen, $renombrado);
    }
    else{
        $imagen = imagecreatefromjpeg($archivo["tmp_name"]);
        $nuevaimg = imagescale($imagen, 400, 300);
        $nuevaimg = imagejpeg($nuevaimg, $nombregenerado);
        $fullsizeimg = imagejpeg($imagen, $renombrado);
    }

    rename($renombrado, $fullsize . $renombrado);
    rename($nombregenerado, $dir . $renombrado);
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
            echo "<h1>Imagen subida con éxito</h1>";
        ?>
    </header>
</body>
</html>
