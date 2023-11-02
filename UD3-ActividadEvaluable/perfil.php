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

if (isset($_COOKIE['user'])) {
    $perfil = $_COOKIE['user'];
} else {
    header("Location: index.php?page=login");
    exit;
}

?>

<main>
    <div class="contenedor-perfil">
        <h1>Bienvenido <?php echo $perfil; ?></h1>
        <p>Estás logueado correctamente.</p>
        <a href="perfil.php?logout=true">Cerrar sesión</a>
    </div>
</main>