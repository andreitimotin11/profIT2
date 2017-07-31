<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 14:09
 */
require __DIR__ . '/autoload.php';

$db = new \App\Db();
$res = $db->query('SELECT * FROM foo');
