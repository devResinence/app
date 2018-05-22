<?php
class Autoloaders {
	
	public static function auto($class){
		require 'class/'.$class.'.php';

	}
}