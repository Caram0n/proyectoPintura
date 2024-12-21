<?php
require '../BDD/firebase_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $user = $auth->createUserWithEmailAndPassword($email, $password);
        echo "Usuario registrado con éxito. Ahora puedes iniciar sesión.";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <form method="POST" action="">
        <label for="email">Correo:</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
