<?php
session_start();
include "conection.php";

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = md5(mysqli_real_escape_string($conn, $_POST['senha']));

$query = "select * from logins where usuario = '{$usuario}' and senha =  '{$senha}'";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['usuarioConectado'] = $usuario;
    header("Location: verificar_pacientes.php");
    exit;
}
else {
    $_SESSION['nao_autenticado'] = true;
    header("Location: index.php");
    exit;
}


?>