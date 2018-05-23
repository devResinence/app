<?php
echo 'index.php';
require 'vendor/autoload.php';
//require_once('class/form.php');
require 'class/Autoloaders.php';
//Autoloaders::Autoloding(['form','bootstrapForm']);
app\Autoloaders::folders();
$config = require('config/config.php');
require('config/database.php');
echo app\Form::Input('nom','checkbox');
echo app\Form::Text();
echo app\Form::Select(['name','fruit']);
var_dump(Database::getInstance($config)->qry('select * from article'));
