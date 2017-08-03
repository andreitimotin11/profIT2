<?php
/*
Повторите код, изученный на уроке. Выделите ту часть, которая управляет установкой и чтением произвольных свойств объекта в трейт. Не забудьте добавить реализацию метода __isset().
Добавьте к своим данным еще одну таблицу - авторы новостей (authors). В таблице новостей, соответственно, добавите поле author_id. Модифицируйте модель новостей следующим образом:
Если запрашивается поле ->author, то сначала проверяем поле ->author_id
Если оно не пусто - делаем запрос к таблице authors и возвращаем результат в виде объекта класса Author
Не забудьте снабдить модели соответствующим PHPDoc.
Измените шаблоны своего приложения, добавьте везде вывод авторов новостей
* Изучите интерфейс SPL ArrayAccess ( http://php.net/manual/ru/class.arrayaccess.php ) Придумайте применение этому поведению, реализуйте его в каком-либо классе своего приложения
* Изучите интерфейс Iterator и реализуйте его в своем приложении
*/
require __DIR__ . '/autoload.php';
/*
$data =\App\Models\News::findAll();

include __DIR__ . '/templates/news.php';
//$users =\App\Models\User::findByID(1);
$db =  \App\Db::instance();
$db->execute('CREATE TABLE roo(id SERIAL)');

//$user = new \App\Models\User();
//$user->name = 'Vasya';
//$user->email = 'v@pupkin.com';*/
//$user->insert();
//$config = App\Config::instance();
//echo $config->data['db']['name'];
$view = new \App\View();
$view->title = 'My cool site';
$view->users = \App\Models\User::findAll();
//echo $view->render(__DIR__ . '/App/templates/index.php');
//$news = new \App\Models\News();
//$news->author = 'Jorik';
//$news->title = 'Jorik';
//$news->text = 'Jorik';
//$news->insert();

