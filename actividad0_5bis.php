<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<h2>Registro</h2>
<form action="registrar.php" method="post" enctype="multipart/form-data">
    <label for="email">Correo:</label>
    <input type="email" name="email" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" required><br>

    <label for="imagen">Imagen (JPG):</label>
    <input type="file" name="imagen" accept="image/jpeg" required><br>

    <label for="pdf">Archivo PDF:</label>
    <input type="file" name="pdf" accept=".pdf"><br>

    <input type="submit" value="Registrar">
</form>
</body>
</html>