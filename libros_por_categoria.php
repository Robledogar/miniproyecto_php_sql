<?php
require_once 'config.php';

$sql = "SELECT * FROM libros_por_categoria";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Categoría</th><th>Número de Libros</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["categoria_id"] . "</td>";
        echo "<td>" . $row["categoria_nombre"] . "</td>";
        echo "<td>" . $row["total_libros"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay libros en la base de datos.";
}

$conn->close();
