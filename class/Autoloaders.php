<?php
namespace app;
class Autoloaders {
	public $folders ='./class';
	public static $arg=[];
	/**
	 * class autoload
	 * @param array $arr if argument is not array so require name of all class else just this class
	 */
	public static function Autoloding($arr=[],$folders){
		if(is_array($arr)){
			foreach($arr as $k =>$v){
				var_dump($folders.'/'.$v);
				require $folders.'/'.$v;
			}
		}else{
		 require $folders.'/'.$arr.'.php';
		}
	}

	/**
	 * search all file in a folder for autoloading class in this folder
	 * @param  string $folder link of folder research
	 * @return function         return autoloding function 
	 */
	public static function folders($folder='.',$dir){
		var_dump($folder);
		// open folder class for browse all file //
		if($folder = opendir($folder)){
			//as long as I'm fine, I scan the files //
			while(false !==($file = readdir($folder))){
				//if file don't .,..,index.php,autoloaders.php//
				if($file !='.' && $file !='..' && $file !='index.php' && $file !='Autoloaders.php'){
					//push in arg variable in this class //
					array_push(self::$arg,$file);
				}
			}
			// called autoloding with all file in folder //
			self::Autoloding(self::$arg,$dir);
		}

	}

}