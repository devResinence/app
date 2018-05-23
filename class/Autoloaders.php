<?php
namespace app;
class Autoloaders {
	public static $folder ='class';
	public static $arg=[];
	/**
	 * class autoload
	 * @param array $arr if argument is not array so require name of all class else just this class
	 */
	public static function Autoloding($arr=[]){
		if(is_array($arr)){
			foreach($arr as $k =>$v){
				require 'class/'.$v;
			}
		}else{
		 require 'class/'.$arr.'.php';
		}
	}

	/**
	 * search all file in a folder for autoloading class in this folder
	 * @param  string $folder link of folder research
	 * @return function         return autoloding function 
	 */
	public static function folders($folder='.'){
		// open folder class for browse all file //
		if($folder = opendir('./class')){
			//as long as I'm fine, I scan the files //
			while(false !==($file = readdir($folder))){
				//if file don't .,..,index.php,autoloaders.php//
				if($file !='.' && $file !='..' && $file !='index.php' && $file !='Autoloaders.php'){
					//push in arg variable in this class //
					array_push(self::$arg,$file);
				}
			}
			// called autoloding with all file in folder //
			self::Autoloding(self::$arg);
		}

	}

}