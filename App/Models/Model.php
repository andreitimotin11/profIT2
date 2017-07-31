<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 18:47
 */

namespace App\Models;
use App\Db;


class Model
{
	const TABLE = '';
	public static function findAll(){
		$db = new Db();
		return $db->query('SELECT * FROM '. self::TABLE, self::class);
	}
}