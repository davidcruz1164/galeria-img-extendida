<?php
    $pagina = $_GET['pag'];
    if ($pagina == null or is_numeric($pagina) == false or $pagina < 1){
        include("invalido.html");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <nav>
        <h1>test</h1>
        <ul>
            <li><a href="#">Galería</a></li>
            <li><a href="subir.html">Subir</a></li>
        </ul>
    </nav>
    <header>
        <?php
            echo "<h1>Página " . $pagina . "</h1>";
        ?>
        <div class="contenido">
            <div class="contenido-grupo">
                <div class="contenido-bloque">
                    <?php
                        echo "<a href='https://www.google.com'><img src='galeria/" . 1*$pagina . ".jpg' alt=''></a>";
                    ?>
                    <p>Post #1</p>
                </div>
                <div class="contenido-bloque">
                    <?php
                        echo "<a href='https://www.google.com'><img src='galeria/" . 2*$pagina . ".jpg' alt=''></a>";
                    ?>
                    <p>Post #2</p>
                </div>
            </div>
            <div class="contenido-grupo">
                <div class="contenido-bloque">
                    <?php
                        echo "<a href='https://www.google.com'><img src='galeria/" . 3*$pagina . ".jpg' alt=''></a>";
                    ?>
                    <p>Post #3</p>
                </div>
                <div class="contenido-bloque">
                    <?php
                        echo "<a href='https://www.google.com'><img src='galeria/" . 4*$pagina . ".jpg' alt=''></a>";
                    ?>
                    <p>Post #4</p>
                </div>
            </div>
        </div>
    </header>
</body>
</html>