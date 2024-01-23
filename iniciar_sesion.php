<?php
session_start();

// Conexión a la base de datos (igual que en registrar.php)
$conexion = new mysqli("localhost", "root", "", "curso");
// Recibir datos del formulario
$email = $_POST['email'];
$password = md5($_POST['password']); // ¡NO use md5 en producción, es inseguro!

// Consultar la base de datos
$query = "SELECT * FROM users WHERE email='$email' AND pass='$password'";
$result = $conexion->query($query);

// Verificar las credenciales
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];

    if (password_verify($password, $hashed_password)) {
        // Iniciar sesión
        $_SESSION['email'] = $email;

        // Establecer cookie de sesión (puedes personalizar el tiempo de expiración)
        $cookie_name = "user_email";
        $cookie_value = $email;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // Caducidad en 30 días

        // Redirigir a la página privada
        header('Location: privado.php');
        exit();
    } else {
        echo "Credenciales incorrectas. <a href='login.php'>Intentar de nuevo</a>";
    }
} else {
    echo "Credenciales incorrectas. <a href='login.php'>Intentar de nuevo</a>";
}
?>