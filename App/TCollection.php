<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 04.08.2017
 * Time: 03:32
 */

namespace App;


trait TCollection
{
	protected $data = [];
	
	public function offsetExists($offset)
	{
		return array_key_exists($this->data[$offset]);
	}
	
	public function offsetGet($offset)
	{
		return $this->data[$offset];
	}
	
	public function offsetSet($offset, $value)
	{
		if ('' == $offset) {
			$this->data[] = $value;
		}else{
			$this->data[$offset] = $value;
		}
		$this->data[$offset] = $value;
	}
	
	public function offsetUnset($offset)
	{
		unset($this->data[$offset]);
	}
	
	/**
	 * Return the current element
	 * @link http://php.net/manual/en/iterator.current.php
	 * @return mixed Can return any type.
	 * @since 5.0.0
	 */
	public function current()
	{
		return current($this->data);
	}
	
	public function next()
	{
		next($this->data);
	}
	
	public function key()
	{
		return key($this->data);
	}
	
	
	public function valid()
	{
		return false !== current($this->data);
	}
	
	
	public function rewind()
	{
		reset($this->data);
	}
	
}