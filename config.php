<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Agrega esta función al archivo config.php
function obtenerCategorias()
{
    global $conn;
    $sql = "SELECT * FROM categorias";
    $result = $conn->query($sql);
    return $result;
}