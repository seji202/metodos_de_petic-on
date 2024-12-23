<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = htmlspecialchars($_GET['name']); // Sanitizar datos
    $age = htmlspecialchars($_GET['age']);
    echo "<h1>Datos Recibidos:</h1>";
    echo "Nombre: $name<br>";
    echo "Edad: $age años<br>";
} else {
    echo "No se recibieron datos.";
}
?>
