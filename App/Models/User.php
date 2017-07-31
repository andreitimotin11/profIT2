<?php
namespace App\Models;
use App\Db;

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 17:19
 */
class User
{
	public $email;
	public $name;
	public static function findAll(){
		$db = new Db();
		return $db->query('SELECT * FROM users', 'App\Models\User');
	}
}