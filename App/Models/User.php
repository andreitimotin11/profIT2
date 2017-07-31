<?php
namespace App\Models;


/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 17:19
 */
class User
	extends Model
{
	const TABLE = 'users';
	public $email;
	public $name;
	
	
}