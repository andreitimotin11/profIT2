<?php
namespace App;
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 15:48
 */

class Db
{
	protected $dbh;

public function __construct()
	{
		$this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
//		var_dump($this->dbh);
	}
	
	public function execute($sql, $arr = [])
	{
		$sth = $this->dbh->prepare($sql);
//		var_dump($sth);
		$res = $sth->execute($arr);
		return $res;
	}
	
	public function query($sql, $class,$arr = [])
	{
		$sth = $this->dbh->prepare($sql);
		$res = $sth->execute($arr);
		if (false !== $res) {
			return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
		}
		return [];
	}
}