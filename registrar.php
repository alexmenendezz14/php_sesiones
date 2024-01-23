<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "curso");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Recibir datos del formulario
$email = $_POST['email'];
$password = md5($_POST['password']);
$imagen = $_FILES['imagen']['name'];
$pdf = $_FILES['pdf']['name'];

// Mover archivos a la carpeta de destino
move_uploaded_file($_FILES['imagen']['tmp_name'], 'carpeta_destino/' . $imagen);
move_uploaded_file($_FILES['pdf']['tmp_name'], 'carpeta_destino/' . $pdf);

// Insertar datos en la tabla
$query = "INSERT INTO users (iduser,email, pass, imagen, pdf) VALUES (null,'$email', '$password', '$imagen', '$pdf')";
$conexion->query($query);

// Redirigir a la página de inicio de sesión
header('Location: login.php');
exit();
?>
