<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 14:09
 */

/*

Перенесите к себе метод моделей insert().
Добавьте в метод insert() запись в поле id модели полученного при вставке в таблицу значения поля авто-инкремента.
Продумайте и реализуйте метод update(). Его задача - обновить поля модели, которая ранее была получена из базы данных. Используйте поле id для понимания того, какую запись нужно обновлять!
Реализуйте метод save(), который решит - "новая" модель или нет и, в зависимости от этого, вызовет либо insert(), либо update().
Добавьте к моделям метод delete()
На базе реализованного вами кода сделайте простейшую (!) админ-панель новостей с функциями добавления, удаления и редактирования новости.

*/
require __DIR__ . '/autoload.php';
/*
$data =\App\Models\News::findAll();

//var_dump($data);die;
include __DIR__ . '/templates/news.php';
//$users =\App\Models\User::findByID(1);
$db =  \App\Db::instance();
$db->execute('CREATE TABLE roo(id SERIAL)');
//var_dump($users );*/

$user = new \App\Models\User();
//$user->name = 'Vasya';
//$user->email = 'v@pupkin.com';
//$user->insert();
//$config = App\Config::instance();
//echo $config->data['db']['name'];
include __DIR__ . '/App/templates/index.php';