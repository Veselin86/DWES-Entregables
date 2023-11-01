<?php 
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<main>
    <form action="plogin.php" method="post">
        <label for="user">Usuario:</label><br>
        <input style="width: 300px;" type="text" name="user" id="user" placeholder="Usuario"><br>
        <label for="pass">Contraseña:</label><br>
        <input style="width: 300px;" type="password" name="pass" id="pass" placeholder="*********"><br>
        <input type="submit" value="Login">
    </form>
</main>

<?php

if (isset($_GET['error'])) {
    echo "<p>" . $_GET['error'] . "</p>";
}

?>