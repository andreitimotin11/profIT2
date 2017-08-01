<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 14:09
 */

/*
3. В абстрактной модели добавьте метод public static findById($id). Он должен вернуть ОДНУ запись из таблицы данной модели, с указанным первичным ключом. Или false, если таковой записи не нашлось.
4. Сделайте таблицу новостей. Добавьте в нее 3-4 новости. На главной странице сайта (index.php) сделайте вывод 3 последних новостей. Используйте модель News для получения данных (возможно, вам придется добавить какой-то еще метод в эту модель). Для передачи данных в шаблон - просто include файла с шаблоном.
5. Каждая новость на главной странице должна быть снабжена ссылкой на страницу article.php?id=NNN, где NNN - номер этой новости. Разработайте полностью страницу article.php
*/
require __DIR__ . '/autoload.php';

$data =\App\Models\News::findAll();

//var_dump($data);die;
include __DIR__ . '/templates/news.php';
//$users =\App\Models\User::findByID(1);
$db =  \App\Db::instance();
$db->execute('CREATE TABLE roo(id SERIAL)');
//var_dump($users );