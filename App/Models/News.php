<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 01.08.2017
 * Time: 16:38
 */

namespace App\Models;


class News
extends Model
{
	const TABLE = 'news';
	public $id;
	public $title;
	public $text;
	public $author;
	public function getArticleById($id){
		$res = parent::findByID($id);
//		var_dump($res);die;
		return $res;
	}
}
