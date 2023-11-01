<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once('validar.php');

$campos = [
    'user' => recoge('user'),
    'pass' => recoge('pass')
];

$user = $_POST['user'];
$pass = $_POST['pass'];

if (empty($user) || empty($pass)) {
    $error_message = "Por favor, completa todos los campos.";
    header("Location: index.php?page=login&error=$error_message");
    exit;
} else {
    if ($user == $_COOKIE['user'] && password_verify($pass, $_COOKIE['pass'])) {
        $_SESSION['user'] = true;
        header("Location: index.php?page=perfil");
        exit;
    } else {
        $error_message = "Usuario y/o contraseña incorrectos.";
        header("Location: index.php?page=login&error=$error_message");
        exit;
    }
}
?>

<main>
    <form action="plogin.php" method="post">
        <label for="user">Usuario:</label><br>
        <input style="width: 300px;" type="text" name="user" id="user" placeholder="Usuario"><br>
        <label for="pass">Contraseña:</label><br>
        <input style="width: 300px;" type="password" name="pass" id="pass" placeholder="*********"><br>
        <input type="submit" value="Login">
    </form>
</main>

<?php

if (isset($_GET['error'])) {
    echo "<p>" . $_GET['error'] . "</p>";
}

?>