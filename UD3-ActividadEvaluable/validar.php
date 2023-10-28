<?php

    function recoge($var) {
        if (isset($_POST[$var])) {
            $tmp = strip_tags($_POST[$var]);
            $tmp = trim($tmp);
            return $tmp;
        }
    }

    function validar_requerido (string $text) : bool {
        return !(trim($text) == '');
    }

    function validar_email (string $email) : bool {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function validar_password (string $pass, $conf_pass) : bool {
        return $pass == $conf_pass;
    } 

?>