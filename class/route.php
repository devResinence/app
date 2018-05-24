<?php
class Route{
	/**
	 * [send to the page switch to parameter]
	 * @param  [string] $get   [name of the send page]
	 * @param  string $param [parameter of url]
	 * @param  string $value [values of parameter url]
	 * @return [type]        [return to the page ]
	 */
	public static function Url($get,$param='',$value=''){
		return !empty($param) && !empty($value)? header('location:'.$get.'?'.$param.'='.$value): header('location:'.$get);
	}

	public function get(){

	}

	public function post(){
		
	} 

}