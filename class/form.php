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
	public static function Input($name,$type='text',$class=null,$id=null,$placeholder=null){
		return '<input id="'.$id.'" class="'.$class.'" type="'.$type.'" name="'.$name.'" placeholder="'.$placeholder.'">';
	}

	public static function Text($name='textarea',$rows='10',$cols='50',$id=null,$class=null,$placeholder=null){
		return "<textarea id=$id class=$class name=$name rows=$rows cols=$cols placeholder=$placeholder ></textarea>";
	}
		
}