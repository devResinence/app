<?php
namespace app;
class Form{

	public $balise;
	/**
	 * generate field
	 * @param  [string] $name  [field name]
	 * @param  string $type  [field type]
	 * @param  [string] $class [field class]
	 * @param  [type] $id    [field id]
	 * @return [string]        [field html]
	 */
	public static function input($name,$type='text',$class=null,$id=null){
		return '<input id="'.$id.'" class="'.$class.'" type="'.$type.'" name="'.$name.'">';
	}
		
}