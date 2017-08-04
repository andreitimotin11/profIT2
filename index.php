<?php
$request_uri = $_SERVER['REQUEST_URI'];
$url = array_pop(explode('?', $request_uri))?:'Index';
//var_dump($str);
$params = explode('&', $url);
$ctrl=array_shift($params);
$act=array_shift($params);

$controller=array_pop(explode('=', $ctrl));
$action=array_pop(explode('=', $act));
//var_dump($controller, $action,$params);die;
require __DIR__ . '/autoload.php';
switch ($controller){
	case 'news' :
		$controller = new \App\Controllers\News();
		break;
		case 'admin' :
		$controller = new \App\Controllers\Admin();
		break;
		case 'index' :
		$controller = new \App\Controllers\News();
		break;
}
$controller = new \App\Controllers\News();
/*
Напишите класс базового контроллера. Вынесите в него метод action($action).
Создайте контроллеры для клиентских страниц новостей (действия "все новости", "одна новость") и для админ-панели (действия "все новости", "редактирование", "сохранение")
Продумайте систему адресов. Например так: index.php?ctrl=CTRL&act=ACT, где СTRL - имя контроллера, ACT - имя экшна. Напишите фронт-контроллер в соответствии с этой системой адресов.
Подумайте - не сделать ли для админ-панели другую точку входа? А может быть другой базовый контроллер? Если решите, что это обоснованно - сделайте.
* Создайте систему ЧПУ. Адрес вида /XXX/YYY/ZZZ должен транслироваться в контроллер XXX\YYY (вложенность пространств имен неограничена) и действие ZZZ
 */
$action = $_GET['action']?: 'Index';
try{
	$controller->action($action,$params);
}catch (\App\Exceptions\Core $e){
	echo 'A aparut exceptie a aplicatiei' . $e->getMessage();
}catch (\PDOException $r){
	echo 'Ceva nu e in regula cu BD!' . $r->getMessage();
}finally{
	echo 'Urra!';
}



















