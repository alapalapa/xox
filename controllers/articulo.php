<?php
session_start();

set_include_path(get_include_path() . PATH_SEPARATOR . $_SESSION['path']);

require_once 'models/model.php';

$id = $_GET['id'];
$datos = new Conexion;
$datos = $datos->getArticuloById($id);

require_once 'views/articulo.php';
?>