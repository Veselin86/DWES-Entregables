<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<header class="contenedor-header">
    <div>
        <h1>Sabores de Bulgaria</h1>
        <h2>Empresa de catering en Valencia</h2>
    </div>
    <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
    </div>
    <div>
        <nav>
            <a href="index.php?page=home">Home</a>
            <?php if (isset($_SESSION['user']) && $_SESSION['user'] === true) : ?>
                <a href="index.php?page=perfil">Perfil</a>
                <a href="perfil.php?logout=true"">Cerrar sesión</a>
            <?php else : ?>
                <a href="index.php?page=registro">Registro</a>
                <a href="index.php?page=login">Login</a>
            <?php endif; ?>
        </nav>
    </div>
</header>