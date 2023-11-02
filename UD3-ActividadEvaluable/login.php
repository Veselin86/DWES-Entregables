<main>
    <div class="contenedor-formulario">
        <?php

        if (isset($_GET['error'])) {
            echo "<div class='mensaje-error'><p>" . $_GET['error'] . "</p></div>";
        }

        ?>
        <form action="plogin.php" method="post">
            <label for="user">Usuario:</label><br>
            <input style="width: 300px;" type="text" name="user" id="user" placeholder="Usuario"><br>
            <label for="pass">Contraseña:</label><br>
            <input style="width: 300px;" type="password" name="pass" id="pass" placeholder="*********"><br>
            <input type="submit" value="Login">
        </form>
    </div>
</main>