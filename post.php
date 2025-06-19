<?php
    $id = $_GET["id"];
    if (!file_exists("galeria/fullsize/" . $id . ".jpg")){
        include("invalido.html");
        exit();
    }

    //todo: tags
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
                echo "<div class='post-contenido'>";
                echo "<div class='post-contenido-titulo'>";
                echo "<h1 id='post-titulo'>Título</h1>";
                echo "<div class='post-contenido-tags'>";
                echo "<span id='post-tag'>tag1</span>";
                echo "<span id='post-tag'>tag2</span>";
                echo "</div>";
                echo "<h2 id='post-id'>Post ID #" . $id . "</h2>";
                echo "<p id='post-descripcion'>Descripción. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium aspernatur alias harum velit laborum perspiciatis quisquam autem voluptatum ducimus deleniti. Placeat fugiat veniam provident, blanditiis quos voluptatum aliquam cupiditate ullam.</p>";
                echo "</div>";
            ?>
            <h1 id="post-comentarios-titulo">Comentarios</h1>
            <form action="" method="post">
                <textarea name="" id="post-comentarios-textarea" rows="2" required></textarea>
            </form>
            </div>
        </div>
    </header>
</body>
</html>
