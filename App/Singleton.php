<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 01.08.2017
 * Time: 17:08
 */

namespace App;


abstract class Singleton
{
	protected function __construct()
	{
		
	}
	
	protected static $instance;
	
	public static function instance()
	{
		if (self::$instance === NULL){
			self::$instance = new static();
		}
		return self::$instance;
	}
}