<?php
session_start();

set_include_path(get_include_path() . PATH_SEPARATOR . $_SESSION['path']);

require_once 'models/model.php';

$login = $_POST['login'];
$pass = $_POST['password'];
$name = $_POST['nombre'];
$surname = $_POST['apellidos'];
$mail = $_POST['email'];
$birth = $_POST['cumple'];


$datos = new Conexion;
$datos->insert($login, $pass, $name, $surname, $mail, $birth);

//echo '<pre';
//print_r($_SERVER);

//header('Location: controllers/listar.php');
require_once 'controllers/listar.php';
?>