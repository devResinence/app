<?php
class Autoloaders {
	/**
	 * class autoload
	 * @param array $arr if argument is not array so require name of all class else just this class
	 */
	public static function Autoloding($arr=[]){
		if(is_array($arr)){
			foreach($arr as $k =>$v){
				require 'class/'.$v.'php';
			}
		}
		 require 'class/'.$arr.'.php';
	}
}