<?php
include("verifica_login.php");
$usuario = $_SESSION['usuarioConectado'];

echo "<h2>Olá, $usuario!</h2>";
?>

<h3>
    <a href='logout.php'>Sair</a>
</h3>
