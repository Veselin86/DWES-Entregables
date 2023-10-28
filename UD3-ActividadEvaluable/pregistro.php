<?php
    require_once('validar.php');


    // $nombre = recoge ('nombre');
    // $direccion = recoge ('direccion');
    // $ciudad = recoge ('ciudad');
    // $cp = recoge ('cp');
    // $email = recoge ('email');
    // $telefono = recoge ('telefono');
    // $user = recoge ('user');
    // $pass = recoge ('pass');
    // $conf_pass = recoge ('conf_pass');
    $campos = [
        'nombre' => recoge('nombre'),
        'direccion' => recoge('direccion'),
        'ciudad' => recoge('ciudad'),
        'cp' => recoge('cp'),
        'email' => recoge('email'),
        'telefono' => recoge('telefono'),
        'user' => recoge('user'),
        'pass' => recoge('pass'),
        'conf_pass' => recoge('conf_pass')
    ];

    // $requeridos = [$nombre, $direccion, $ciudad, $cp, $email, $telefono, $user, $pass, $conf_pass];
    $error = false;

foreach ($campos as $campo => $valor) {
    if (!validar_requerido($_REQUEST[$valor] ?? '')) {
        echo "El campo $campo es obligatorio.\n";
        $error = true;
    }
}


    // echo ($nombre . ' ' . $direccion . ' ' .  $ciudad . ' ' .  $cp . ' ' .  $email . ' ' .  $telefono . ' ' .  $user . ' ' .  $pass . ' ' .  $conf_pass);
?>