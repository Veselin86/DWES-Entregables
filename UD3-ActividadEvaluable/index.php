<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores de Bulgaria</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header class="contenedor">
        <div>
            <h1>Sabores de Bulgaria</h1>
            <h2><br>Empresa de catering<br>en Valencia</h2>
        </div>
        <div class="logo">
            <a href="index.php"><img src="img/logo.jpeg" alt="Logo"></a>
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="seccion_registro.php">Registro</a>
            <a href="seccion_login.php">Login</a>
            <a href="pagina_perfil.php">Perfil</a>
        </nav>
    </header>

    <div class="contenedor">
        <aside class="sidebar">
            <div>
                <a href="https://valenciasecreta.com/restaurantes-valencia/"><img src="img/restaurantes.jpeg" alt="Recetas Destacadas"><h4>Restaurantes</h4></a>
                <a href="https://www.lovevalencia.com/agenda/gastronomia"><img src="img/eventos-culinarios.jpeg" alt="Eventos culinarios"><h4>Eventos<br>culinarios</h4></a>
                <a href="https://canalcocina.es/receta/musaka-bulgara"><img src="img/video-tutoriales.jpg" alt="Video tutoriales"><h4>Videos y<br>tutoriales</h4></a>
                <a href="https://viajarabulgaria.com/comida-tipica-de-bulgaria/"><img src="img/ingredientes.jpeg" alt="Ingredientes tipicos"><h4>Ingredientes<br>tipicos</h4></a>
            </div>
        </aside>

        <main>
            <div class="informacion">
                <h3>Breve información para la cocina de Bulgaria:</h3>
                <p>
                    La cocina búlgara (en búlgaro: българска кухня) es representativa de la gastronomía de los Balcanes,
                    teniendo trazas de la cocina turca, la cocina griega y la cocina árabe, se puede encontrar en menor
                    medida influencias de la cocina italiana y cocina húngara. Debido a su clima algo caluroso se puede
                    decir que hay una abundancia relativa y diversa de vegetales y frutas propios de la tierra.
                    Esta cocina es famosa por sus abundantes ensaladas, aparecen acompañando casi cualquier plato.
                    Sorprende a los visitantes de Bulgaria la abundancia y diversidad de productos frescos, así como
                    los vinos y las bebidas alcohólicas locales tales como el rakia, el mastika y el menta.
                    La cocina búlgara se elabora con una variedad de sopas calientes y frías, un ejemplo de sopa
                    fría es el tarator. Existen muchos variedades de comidas típica búlgara uno de los más conocidos es la banitsa.
                </p>
            </div>
            <div class="productos">
                <a href="index.php"><img src="img/entrantes.jpeg" alt="Entrantes"><h3>Entrantes</h3></a>
                <a href="index.php"><img src="img/principales.jpeg" alt="Platos principales"><h3>Platos principales</h3></a>
            </div>
            <div class="productos">
                <a href="index.php"><img src="img/postres.jpeg" alt="Postres"><h3>Postres</h3></a>
                <a href="index.php"><img src="img/recetas-destacadas.jpeg" alt="Destacadas"><h3>Recetas Destacadas<h3></a>
            </div>
        </main>
    </div>
    <footer>
        <h4>Veselin Vladimirov Veselinov</h4>
        <?php
        echo date("d/m/Y H:i:s");
        ?>
    </footer>

</body>

</html>