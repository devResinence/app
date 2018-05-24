<?php 
use PHPUnit\Framework\TestCase;
require '../../class/route.php';
class RouteTest extends TestCase{
	
	public static function testGet(){
		self::assertEmpty(Route::get('article'));
		self::assertEquals([],Route::get());
		self::assertContains('article',Route::get('article'));
	}
	public static function testPost(){
		if(empty(Route::post())){
			self::assertEquals([],Route::post());
		}else{
			self::assertTrue([],!empty(Route::post()));
		}
		
	}
	//testing//
}