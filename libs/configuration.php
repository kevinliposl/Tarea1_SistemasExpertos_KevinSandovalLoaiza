<?php

require 'libs/Config.php';
$config = Config::singleton();
$config->set('controllerFolder', 'controller/');
$config->set('modelFolder', 'model/');
$config->set('viewFolder', 'view/');

$config->set('dbhost', 'localhost');
$config->set('dbname', 'homework1_expertsystems_b46549');
$config->set('dbuser', 'root');
$config->set('dbpass', '');
