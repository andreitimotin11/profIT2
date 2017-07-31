<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 14:09
 */
require __DIR__ . '/autoload.php';

$db = new \App\Db();
//$db->execute('SELECT * from news');
$res = $db->execute('CREATE TABLE foo(id SERIAL)');