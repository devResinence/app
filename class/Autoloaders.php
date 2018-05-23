<?php
namespace app;
class Autoloaders {

	/**
	 * search all file in a folder for autoloading class in this folder
	 * @param  string $folder link of folder research
	 * @return function         return autoloding function 
	 */
	public static function Autoload($folder='.',$dir){
		// open folder class for browse all file //
		if($folder = opendir($folder)){
			//as long as I'm fine, I scan the files //
			while(false !==($file = readdir($folder))){
				//if file don't .,..,index.php,autoloaders.php//
				if($file !='.' && $file !='..' && $file !='index.php' && $file !='Autoloaders.php' && $file !='config.php'){
					require $dir.'/'.$file;
				}
			}
		
		}


	}

}