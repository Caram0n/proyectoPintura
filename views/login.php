<?php
require '../BDD/firebase_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $signInResult = $auth->signInWithEmailAndPassword($email, $password);
        $idToken = $signInResult->idToken();

        // Inicia la sesión del usuario
        session_start();
        $_SESSION['idToken'] = $idToken;
        $_SESSION['email'] = $email;

        header('Location: dashboard.php');
        exit;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="">
        <label for="email">Correo:</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
