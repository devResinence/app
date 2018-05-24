<?php
namespace app;
class HTML{

	/**
	 * [Img description]
	 * @param [string] $src   [url of the image source]
	 * @param string $alt   [tag alt of image]
	 * @param string $title [title of image]
	 */
	public static function Img($src,$alt='',$title=''){
		return "<img src=$src alt=$alt title=$title>";
	}

	/**
	 * generate html tag ul, li
	 * @param [string] $data [array or string for generate list]
	 * @param string $type [ol or ul]
	 */
	public static function Liste($data,$type='ul'){
		$list ="<$type>";
		if(is_array($data)){
			foreach ($data as $v) {
				$list.='<li>'.$v.'</li>';
			}
			
		}else{
			$list.="<li>$data</li>";
		}

		$list.="</$type>";	
		return $list;
	}
	
}