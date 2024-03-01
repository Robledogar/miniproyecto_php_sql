<?php
require_once 'config.php';

$sql = "SELECT * FROM libros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Título</th><th>Autor</th><th>Año de Publicación</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["titulo"] . "</td>";
        echo "<td>" . $row["autor"] . "</td>";
        echo "<td>" . $row["anio_publicacion"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay libros en la base de datos.";
}

$conn->close();
