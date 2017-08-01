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
	public static function findByID($id)
	{
		$query = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id ';
		$arr = [':id' => $id];
		$db = Db::instance();
		$result = $db->query($query, static::class, $arr);
		if ($result) {
			return $result[0];
		}
		return false;
		
	}
	public function isNew()
	{
		return empty($this->id);
	}
	public function insert()
	{
		if(!$this->isNew()){
			return;
		}
		$columns = [];
		$values = [];
		foreach ($this as $k => $v) {
			if('id'==$k){
				continue;
			}
			$columns[] = $k;
			$values[':'. $k] = $v;
		}
		var_dump($values);
//		die;
		$sql = 'INSERT INTO ' . static::TABLE . ' (' .
			implode(',', $columns) . ' ) VALUES ( '.
			implode(',', array_keys($values)) .
			') ';
		$db = Db::instance();
		$db->execute($sql, $values);
//		echo $sql;die;
	}
}