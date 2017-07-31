<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 15:48
 */
namespace App;
class Db
{
	protected $dbh;
	
	function __construct()
	{
		$this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
		var_dump($this->dbh);
	}
	
	public function execute($sql)
	{
		$sth = $this->dbh->prepare($sql);
//		var_dump($sth);
		$res = $sth->execute();
		return $res;
	}
	
	public function query($sql)
	{
		$sth = $this->dbh->prepare($sql);
		$res = $sth->execute();
		if(false !== $res){
			return $sth->fetchAll();
		}
		return [];
	}
}