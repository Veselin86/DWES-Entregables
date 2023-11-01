<?php

    function recoge($var) {
        if (isset($_POST[$var])) {
            $tmp = strip_tags($_POST[$var]);
            $tmp = trim($tmp);
            return $tmp;
        }
    }

    function validar_requerido (string $texto) : bool {
        return !(trim($texto) === '');
    }

    function validar_email (string $email) : bool {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function validar_password (string $pass, $conf_pass) : bool {
        return $pass == $conf_pass;
    } 

    function validar_telefono ($telefono) : bool {
        $patron = "/^(\+34|0034|34)?[ -]*(6|7|8|9)[ -]*([0-9][ -]*){8}$/";
        return preg_match($patron, $telefono);
    }
?>