<?php
    // TODO: Hacer sistema de tags
    // Mejor visualización de tags (usar columnas xd)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="js/archivos.js" defer></script>
    <script src="js/tags.js" defer></script>
</head>
<body>
    <nav>
        <h1>test</h1>
        <ul>
            <li><a href="galeria.php?pag=1">Galería</a></li>
            <li><a href="#">Subir</a></li>
        </ul>
        <div class="nav-cuenta">
            <a href="php/cuenta.php" id="cuenta">Invitado</a>
        </div>
    </nav>
    <header>
        <h1>Subir</h1>
        <div class="contenido-subir">
            <div class="contenido-subir-divisores">
                <div class="contenido-subir-preview">
                    <h1>Vista previa</h1>
                    <img src="https://placehold.co/400x300" alt="" id="image-preview">
                </div>
                <div class="contenido-subir-preview-requisitos">
                    <div class="contenido-subir-preview-requisitos-requisito">
                        <span class="requisito1" id="requisito1"></span>
                        <p>Mínima res. de 400x300</p>
                    </div>
                    <div class="contenido-subir-preview-requisitos-requisito">
                        <span class="requisito1" id="requisito2"></span>
                        <p>Tamaño mayor a 20KB</p>
                    </div>
                    <div class="contenido-subir-preview-requisitos-requisito">
                        <span class="requisito1" id="requisito3"></span>
                        <p>Tamaño menor a 5.2MB</p>
                    </div>
                </div>
            </div>
            <div class="contenido-subir-divisores">
                <h1>Datos</h1>
                <div class="contenido-subir-formulario">
                    <form action="php/subida.php" method="POST" enctype="multipart/form-data">
                        <input type="file" accept=".png, .jpg, .jpeg" name="archivo" id="archivo-file" required>
                        <div class="contenido-subir-formulario-fila1">
                            <div class="contenido-subir-formulario-fila1-input">
                                <p>Título</p>
                                <input type="text" name="titulo" id="titulo-input" required>
                            </div> 
                        </div>
                        <div class="contenido-subir-formulario-fila1">
                            <div class="contenido-subir-formulario-fila1-input">
                                <p>Tags</p>
                                <div class="contenido-subir-formulario-fila1-input-tags" id="insert-tags">
                                </div>
                            </div>
                            <div class="contenido-subir-formulario-fila1-input">
                                <p>Insertar tags</p>
                                <input type="text" name="titulo" id="tags-input">
                            </div>
                        </div>
                        <input type="submit" value="Subir" id="btn-enviar" disabled>
                    </form>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
