<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregador de libros</title>
</head>
<body>
    <h1>Agregar Libro</h1>
    <form action="" method="post">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required><br>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" required><br>

        <label for="anio_publicacion">Año de Publicación:</label>
        <input type="number" name="anio_publicacion" id="anio_publicacion" required><br>

        <button type="submit" name="agregar_libro">Agregar Libro</button>
    </form>

    <?php
    require_once 'config.php';

    if (isset($_POST['agregar_libro'])) {
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $anio_publicacion = $_POST['anio_publicacion'];

        $sql = "INSERT INTO libros (titulo, autor, anio_publicacion) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $titulo, $autor, $anio_publicacion);

        if ($stmt->execute()) {
            echo "<p>Libro agregado correctamente.</p>";
        } else {
            echo "<p>Error al agregar el libro: " . $conn->error . "</p>";
        }

        $stmt->close();
    }

    $conn->close();
    ?>
</body>
</html>
