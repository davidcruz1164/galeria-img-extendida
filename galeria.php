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
                        if ($pagina == 1){
                            echo "<a href='https://www.google.com'><img src='galeria/" . 1 . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 1 . "</p>";
                        }
                        else if (file_exists("galeria/" . 1 + (4*($pagina-1)) . ".jpg")){
                            echo "<a href='https://www.google.com'><img src='galeria/" . 1 + (4*($pagina-1)) . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 1 + (4*($pagina-1)) . "</p>";
                        }
                    ?>
                </div>
                <div class="contenido-bloque">
                    <?php
                        if ($pagina == 1){
                            echo "<a href='https://www.google.com'><img src='galeria/" . 2 . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 2 . "</p>";
                        }
                        else if (file_exists("galeria/" . 2 + (4*($pagina-1)) . ".jpg")){
                            echo "<a href='https://www.google.com'><img src='galeria/" . 2 + (4*($pagina-1)) . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 2 + (4*($pagina-1)) . "</p>";
                        }
                    ?>
                </div>
            </div>
            <div class="contenido-grupo">
                <div class="contenido-bloque">
                    <?php
                        if ($pagina == 1){
                            echo "<a href='https://www.google.com'><img src='galeria/" . 3 . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 3 . "</p>";
                        }
                        else if (file_exists("galeria/" . 3 + (4*($pagina-3)) . ".jpg")){
                            echo "<a href='https://www.google.com'><img src='galeria/" . 3 + (4*($pagina-1)) . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 3 + (4*($pagina-1)) . "</p>";
                        }
                    ?>
                </div>
                <div class="contenido-bloque">
                    <?php
                        if ($pagina == 1){
                            echo "<a href='https://www.google.com'><img src='galeria/" . 4 . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 4 . "</p>";
                        }
                        else if (file_exists("galeria/" . 4 + (4*($pagina-1)) . ".jpg")){
                            echo "<a href='https://www.google.com'><img src='galeria/" . 4 + (4*($pagina-1)) . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 4 + (4*($pagina-1)) . "</p>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
