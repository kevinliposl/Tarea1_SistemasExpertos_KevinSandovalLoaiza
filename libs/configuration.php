<?php

require 'libs/Config.php';
$config = Config::singleton();
$config->set('controllerFolder', 'controller/');
$config->set('modelFolder', 'model/');
$config->set('viewFolder', 'view/');

$config->set('dbhost', 'localhost');
$config->set('dbname', 'tarea1_sistemasexpertos_kevinsandovalloaiza');
$config->set('dbuser', 'root');
$config->set('dbpass', '');
