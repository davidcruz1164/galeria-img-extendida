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
            <li><a href="#">Subir</a></li>
        </ul>
    </nav>
    <header>
        <?php
            if ($creado){
                echo "<h1>Imagen subida con éxito</h1>";
            }
            else{
                echo "<h1>Todos los slots están ocupados</h1>";
            }
        ?>
    </header>
</body>
</html>
