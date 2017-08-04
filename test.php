<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 01.08.2017
 * Time: 17:07
 */
require __DIR__ . '/autoload.php';
//$s = \App\Singleton::instance();

$a = new \App\Collection();
$a[1] = 1;
$a[11] = 11;
$a[2] = 234;
foreach ($a as $el){
	echo $el;
}
//var_dump($a);