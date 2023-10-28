<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores de Bulgaria</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="contenedor">

        <?php include 'aside.php'; ?>

        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];


            switch ($page) {
                case 'registro':
                    include 'registro.php';
                    break;
                case 'login':
                    include 'login.php';
                    break;
                case 'perfil':
                    include 'perfil.php';
                    break;
                case 'home':
                default:
                    include 'principal.php';
                    break;
            }
        }
        ?>


    </div>

    <?php include 'footer.php'; ?>

</body>

</html>