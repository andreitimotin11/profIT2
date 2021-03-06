<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 18:47
 */

namespace App\Models;

use App\Db;


abstract class Model
{
	const TABLE = '';
	public $id;
	
	public static function findAll()
	{
		$db = Db::instance();
		return $db->query('SELECT * FROM ' . static::TABLE, static::class);
	}
//	В абстрактной модели добавьте метод public static findById($id).
// Он должен вернуть ОДНУ запись из таблицы данной модели, с указанным первичным ключом.
// Или false, если таковой записи не нашлось.
	/**
	 * @param $id
	 * @return object
	 */
	public static function findByID($id)
	{
		$query = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id ';
		$arr = [':id' => $id];
		$db = Db::instance();
		$result = $db->query($query, static::class, $arr);
		if ($result) {
			return $result[0];
		}else{
			return false;
		}
		
		
	}
	
	public function isNew()
	{
		return empty($this->id);
	}
	
	public function insert()
	{
		if (!$this->isNew()) {
			return;
		}
		$columns = [];
		$values = [];
		foreach ($this as $k => $v) {
			if ('id' == $k) {
				continue;
			}
			$columns[] = $k;
			$values[':' . $k] = $v;
		}
//		var_dump($values);
//		die;
		$sql = 'INSERT INTO ' . static::TABLE . ' (' .
			implode(',', $columns) . ' ) VALUES ( ' .
			implode(',', array_keys($values)) .
			') ';
		$db = Db::instance();
		$db->execute($sql, $values);
	}
	
	public function update()
	{
		if ($this->isNew()) {
			return;
		}
//		$sql = 'UPDATE ' . static::TABLE . ' SET title = :title, text = :text WHERE id = 8';
		$values = [];
		$str = 'UPDATE ' . static::TABLE . ' SET ';
		foreach ($this as $k => $v) {
			if ('id' == $k) {
				continue;
			}
			if (empty($v)) {
				continue;
			}
			$values[':' . $k] = $v;
			$str .= $k . ' = :' . $k . ', ';
		}
		$str = rtrim($str, ', ');
		$str .= ' WHERE id = :id';
		$values['id'] = $this->id;
//		echo $str;
		
		$db = Db::instance();
		$db->query($str, static::class, $values);
	}
	
	public function save()
	{
		//Exista in tabel o inregistrare cu asa id?
		if (static::existsInTable($this->id)) {
			$this->update();
		} else {
			$this->insert();
		}
	}
	
	public static function existsInTable($id)
	{
		$sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id =:id';
		$values = ['id' => $id];
		$db = Db::instance();
		if ($db->query($sql, static::class, $values)) return true;
		return false;
	}
	
	public function delete()
	{
		$sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';
		$values = [':id' => $this->id];
		$db = Db::instance();
		$db->query($sql, static::class, $values);
	}
	public function lastId(){
		$db = Db::instance();
		$this->id = $db->lastId();
		return $this->id;
	}
}