<main>
    <div class="informacion">
        <h3 style="color:firebrick; font-size:30px;">REGISTRO</h3>
        <form action="pregistro.php" method="POST" name="registro">
            <p>Datos personales:</p>
            <label for="nombre">Nombre completo:</label>
            <input style="width: 750px;" type="text" name="nombre" id="nombre"><br>
            <label for="direccion">Dirección completa:</label>
            <input style="width: 750px;" type="text" name="direccion" id="direccion"><br>
            <label for="ciudad">Ciudad:</label>
            <input style="width: 300px;" type="text" name="ciudad" id="ciudad"><br>
            <label for="cp">Codigo postal:</label>
            <input style="width: 100px;" type="number_format" name="cp" id="cp"><br>
            <p>Contaco:</p>
            <label for="email">Correo electronico:</label>
            <input style="width: 300px;" type="text" name="email" id="email"><br>
            <label for="telefono">Numero de telefono:</label>
            <input style="width: 100px;" type="number_format" name="telefono" id="telefono"><br>
            <p>Credenciales:</p>
            <label for="user">Nombre de Usuario:</label>
            <input style="width: 300px;" type="text" name="user" id="user"><br>
            <label for="pass">Contraseña:</label>
            <input style="width: 300px;" type="password" name="pass" id="pass"><br>
            <label for="conf_pass">Confirmar contraseña:</label>
            <input style="width: 300px;" type="password" name="conf_pass" id="conf_pass"><br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpiar formulario">
        </form>
    </div>
</main>