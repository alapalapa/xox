<?php
session_start();

set_include_path(get_include_path() . PATH_SEPARATOR . $_SESSION['path']);

require_once 'models/model.php';


$datos = new Conexion;
$datos = $datos->getAll();

require_once 'views/listado.php';
?>