<?php
include 'views/header.php';
?>
    <h1>Login</h1>
    <form action="src/acceso.php" method="POST">
        <p>Email: <input type="email" name="email"></p>
        <p>Contraseña: <input type="password" name="password"></p>
        <p><input type="submit" name="enviar" value="Enviar"></p>
    </form>

    <a href="index.php">¿No estás registrado? Entra aquí</a>
<?php
include 'views/footer.php';
?>
