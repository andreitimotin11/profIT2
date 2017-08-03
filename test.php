<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 01.08.2017
 * Time: 17:07
 */
require __DIR__ . '/autoload.php';
//$s = \App\Singleton::instance();
//$d = \App\Singleton::instance();
//var_dump($s);
//var_dump($d);

$news = \App\Models\News::findAll();
//var_dump($news);
var_dump($news[1]->author);

