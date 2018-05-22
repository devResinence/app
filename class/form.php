<?php
namespace app;
class Form{

	public static $balise;
	/**
	 * generate field
	 * @param  [string] $name  [field name]
	 * @param  string $type  [field type]
	 * @param  [string] $class [field class]
	 * @param  [string] $id    [field id]
	 * @param   string $placeholder [field placeholder]
	 * @return [string]        [field html]
	 */
	public static function Input($name,$type='text',$class=null,$id=null,$placeholder=null){
		return '<input id="'.$id.'" class="'.$class.'" type="'.$type.'" name="'.$name.'" placeholder="'.$placeholder.'">';
	}

	/**
	 * generate textarea
	 * @param string $name        field name
	 * @param string $rows        field rows
	 * @param string $cols        field cols
	 * @param string $id          field id
	 * @param string $class       field class
	 * @param string $placeholder field placeholder
	 * @return string html textarea
	 */
	public static function Text($name='textarea',$rows='10',$cols='50',$id=null,$class=null,$placeholder=null){
		return "<textarea id=$id class=$class name=$name rows=$rows cols=$cols placeholder=$placeholder ></textarea>";
	}

	/**
	 * generate Select field
	 * @param array  $option just pass a table argument in the format ['','','']
	 * @param string $name   tag name of select
	 */
	public static function Select($option=[],$name='mySelect'){
		if(is_array($option)){
			self::$balise='<select name="'.$name.'">';
			foreach ($option as $key => $value) {
				self::$balise.='<option name ="'.$value.'" value="'.$value.'">'.$value.'</option>';
			}
			self::$balise.='</select>';
			return self::$balise;
		}
	}
		
}