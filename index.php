<?php
session_start();
$_SESSION['path'] = __DIR__ ;
set_include_path(get_include_path() . PATH_SEPARATOR . $_SESSION['path']);

require_once 'models/model.php';


require_once 'views/index.php';