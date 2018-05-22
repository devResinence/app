<?php
echo 'index.php';
require 'vendor/autoload.php';
//require_once('class/form.php');
require 'class/Autoloaders.php';
Autoloaders::auto('form');

echo app\Form::Input('nom');
echo app\Form::Text();
echo app\Form::Select(['name','fruit']);