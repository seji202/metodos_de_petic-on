<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $FileTemp = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $Directorio = 'uploads/';

        // Crear el directorio si no existe
        if (!is_dir($Directorio)) {
            mkdir($Directorio, 0755, true);
        }

        $destPath = $Directorio . basename($fileName);

        if (move_uploaded_file($FileTemp, $destPath)) {
            echo "<h1>Imagen subida exitosamente</h1>";
            echo "<p>Archivo: <a href='$destPath'>$fileName</a></p>";
        } else {
            echo "Error al mover el archivo al directorio destino.";
        }
    } else {
        echo "No se subió ningún archivo o ocurrió un error.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
