<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    echo "<h1>Datos Recibidos:</h1>";
    echo "Correo Electrónico: $email<br>";
    echo "Contraseña: $password<br>";
} else {
    echo "No se recibieron datos.";
}
?>
