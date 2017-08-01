<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 01.08.2017
 * Time: 15:20
 */
//namespace App;
//use \App\Db;
require __DIR__ . '/../autoload.php';
$db = \App\Db::instance();
$q = $db->execute('DROP TABLE foo');
var_dump($q);
$res = $db->query('SELECT * FROM persons WHERE id<:id',\App\Models\User::class,  [':id'=>4]);
var_dump($res);