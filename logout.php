<?php
require_once 'controller/Autenticador.class.php';
session_start();
session_destroy();
setcookie('login');
header('location:index.php');
?>