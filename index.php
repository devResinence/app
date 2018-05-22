<?php
echo 'index.php';
require 'vendor/autoload.php';
//require_once('class/form.php');
require 'class/Autoloaders.php';
Autoloaders::auto('form');
$f = new app\Form();