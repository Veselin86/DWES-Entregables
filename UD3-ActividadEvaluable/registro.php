<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<main>
    <div class="contenedor-formulario">
        <h3>Formulario para<br>realizar el registro:</h3>
        <?php

        if (isset($_SESSION['error_message'])) {
            echo "<p class='mensaje-error'>" . $_SESSION['error_message'] . "</p>";
            unset($_SESSION['error_message']);
        }
        ?>
        <form action="pregistro.php" method="POST" name="registro">
            <label for="nombre">Nombre completo:</label><br>
            <input style="width: 500px;" type="text" name="nombre" id="nombre" placeholder="Nombre Apellido1 Apellido2"><br>
            <p>Contaco:</p>
            <label for="email">Correo electronico:</label><br>
            <input style="width: 300px;" type="text" name="email" id="email" placeholder="nombre@dominio.es"><br>
            <label for="telefono">Numero de telefono:</label><br>
            <input style="width: 300px;" type="number_format" name="telefono" id="telefono" placeholder="XXX-XX-XX-XX"><br>
            <p>Credenciales:</p>
            <label for="user">Nombre de Usuario:</label><br>
            <input style="width: 300px;" type="text" name="user" id="user" placeholder="Usuario"><br>
            <label for="pass">Contraseña:</label><br>
            <input style="width: 300px;" type="password" name="pass" id="pass" placeholder="*********"><br>
            <label for="conf_pass">Confirmar contraseña:</label><br>
            <input style="width: 300px;" type="password" name="conf_pass" id="conf_pass" placeholder="*********"><br><br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpiar formulario">
        </form>
    </div>
</main>