<?php
if (isset($_REQUEST['name'])) {
    $name = htmlspecialchars($_REQUEST['name']);
    echo "<h1>Datos Recibidos:</h1>";
    echo "Nombre: $name<br>";
} else {
    echo "No se recibieron datos.";
}
?>
