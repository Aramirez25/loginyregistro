<?php
include 'views/header.php';
?>
    <h1>Regístrate</h1>
    <form action="src/registro.php" method="POST">
        <p>Nombre: <input type="text" name="nombre"></p>
        <p>Email: <input type="email" name="email"></p>
        <p>Contraseña: <input type="password" name="password"></p>
        <p>Repetir contraseña: <input type="password" name="password_repeat"></p>
        <p><input type="submit" name="enviar" value="Enviar"></p>

    </form>
    <a href="login.php">¿Ya estás registrado? Entra aquí</a>
<?php
include 'views/footer.php';
?>
