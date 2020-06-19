<?php
session_start();
if(!$_SESSION['usuarioConectado']) {
    header('Location: index.php');
    exit();
}