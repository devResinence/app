<?php
echo 'index.php';
require 'vendor/autoload.php';
//require_once('class/form.php');
require 'class/Autoloaders.php';
//Autoloaders::Autoloding(['form','bootstrapForm']);
app\Autoloaders::Autoload('./class','./class');
$config = require('config/config.php');
app\Autoloaders::Autoload('./config','./config');
//require('config/database.php');
echo app\Form::Input('nom','checkbox');
echo app\Form::Text();
echo app\Form::Select(['name','fruit']);
var_dump(Database::getInstance($config)->slct('*','article'));
//var_dump(Database::getInstance($config)->inst('article','titre,category_id',':titre,:category_id','tom,104'));
//Database::getInstance($config)->delt('article',5);
