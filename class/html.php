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

	public static function Table($th=[],$td=[]){
		$table='<table>';
			if(!empty($th)){
				$table.='<tr>';
					foreach ($th as $k => $v) {
						$table.='<th>'.$v.'</th>';
					}
				$table.='</tr>';
			}
			if(!empty($td)){
				$table.='<tr>';
					foreach ($td as $k => $v) {
						$table.='<td>'.$v.'</td>';
					}
				$table.='</tr>';
			}
			
		$table.='</table>';
		return $table;
	}

	public static function Article(){

	}

	public static function Footer(){

	}

	public static function A($href,$link='',$title=''){
		return "<a href=$href title=$title>$link</a>";
	}

	public static function Paginate(){

	}
	
}