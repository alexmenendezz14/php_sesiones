<?php
session_start();

// Verificar la sesión
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}
?>

    <!DOCTYPE html>
    <html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Privada</title>
</head>
<body>
<h2>Bienvenido, <?php echo $_SESSION['email']; ?>!</h2>
<h1>Estamos en la zona privada</h1>
<!-- Contenido privado aquí -->
<a href="cerrar_sesion.php">Cerrar Sesión</a>
</body>
    </html><?php
