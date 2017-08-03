<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 03.08.2017
 * Time: 18:05
 */

namespace App;


trait SetTrait
{
	protected $data = [];
	
	public function __set($k, $v)
	{
		// TODO: Implement __set() method.
		$this->data[$k] = $v;
	}
	
	public function __get($k)
	{
		// TODO: Implement __get() method.
		return $this->data[$k];
	}
	public function __isset($k){
		return isset($this->data[$k]);
	}
}