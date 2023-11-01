<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['logout'])) {
    if (session_status() == PHP_SESSION_ACTIVE) {
        session_destroy();
        header("Location: index.php?page=login");
        exit;
    } 
}

?>

<main>
    <h1>Bienvenido al perfil de </h1>
    <p>Estás logueado correctamente.</p>
    <a href="perfil.php?logout=true">Cerrar sesión</a>
</main>