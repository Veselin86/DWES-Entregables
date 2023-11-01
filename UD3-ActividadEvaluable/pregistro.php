<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require_once('validar.php');

$campos = [
    'nombre' => recoge('nombre'),
    'email' => recoge('email'),
    'telefono' => recoge('telefono'),
    'user' => recoge('user'),
    'pass' => recoge('pass'),
    'conf_pass' => recoge('conf_pass')
];

$errores = false;

foreach ($campos as $nombreCampo => $valorCampo) {
    if (!validar_requerido($valorCampo ?? '')) {
        $errores = true;
        $error_message = "El campo $nombreCampo es obligatorio.<br>";
        header("Location: index.php?page=registro&error=$error_message");
        exit;
    }
}

if (!validar_password($_REQUEST['pass'], $_REQUEST['conf_pass'])) {
    $errores = true;
    $error_message = "La contraseña y la confirmación no coinciden.<br>";
    header("Location: index.php?page=registro&error=$error_message");
    exit;
}

if (!validar_email($_REQUEST['email'])) {
    $errores = true;
    $error_message = "El campo de correo electronico tiene un formato no válido.<br>";
    header("Location: index.php?page=registro&error=$error_message");
    exit;
}

if (!validar_telefono($_REQUEST['telefono'])) {
    $errores = true;
    $error_message = "El telefono tiene un formato incorecto.<br>";
    header("Location: index.php?page=registro&error=$error_message");
    exit;
}

if (!$errores) {

    $pass_encriptada = password_hash($_REQUEST['pass'], PASSWORD_BCRYPT);
    $datos_usuario = [$_REQUEST['nombre'], $_REQUEST['email'], $_REQUEST['telefono'], $_REQUEST['user']];
    $caducidad = time() + 3600;
        
    setcookie('user', $_REQUEST['user'], $caducidad);
    setcookie('pass', $pass_encriptada, $caducidad);
    setcookie('usuario_datos', serialize($datos_usuario), $caducidad);
    header('Location: index.php?page=login');
    exit;
}

?>

<main>
    <div class="informacion-formulario">
        <h3>Formulario para<br>realizar el registro:</h3>
        <div class="contenedor-formulario">
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
    </div>
</main>

<?php

if (isset($_GET['error'])) {
    echo "<p>" . $_GET['error'] . "</p>";
}

?>