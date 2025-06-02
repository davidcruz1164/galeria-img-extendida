<?php
    $id = $_GET["id"];
    if (!file_exists("galeria/fullsize/" . $id . ".jpg")){
        include("invalido.html");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <nav>
        <h1>test</h1>
        <ul>
            <li><a href="galeria.php?pag=1">Galería</a></li>
            <li><a href="subir.html">Subir</a></li>
        </ul>
    </nav>
    <header>
        <div class="contenido-post">
            <?php
                echo "<img src='galeria/fullsize/" . $id . ".jpg'>";
            ?>
        </div>
    </header>
</body>
</html>