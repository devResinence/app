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
//var_dump(Database::getInstance($config)->updt('article','titre','tom104','1'));
//Database::getInstance($config)->delt('article',5);
$get = Route::get();
//echo app\HTML::Video('480','480','','https://archive.org/download/WebmVp8Vorbis/webmvp8.gif','https://archive.org/download/WebmVp8Vorbis/webmvp8_512kb.mp4','video/mp4');
//echo app\HTML::Audio('controls','toto.wav','audio/wav');
?>
