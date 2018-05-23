<?php
echo 'index.php';
require 'vendor/autoload.php';
//require_once('class/form.php');
require 'class/Autoloaders.php';
//Autoloaders::Autoloding(['form','bootstrapForm']);
var_dump(app\Autoloaders::folders());
echo app\Form::Input('nom','checkbox');
echo app\Form::Text();
echo app\Form::Select(['name','fruit']);