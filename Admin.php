<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 02.08.2017
 * Time: 21:34
 */
require_once __DIR__ . '/autoload.php';

$view = new \App\View();
$view->title = 'News';
$view->news = \App\Models\News::findAll();
$reason = trim($_GET['reason']);
$id = trim($_GET['id']);
if ($_POST['title']) {
	if (!empty($_POST['id'])) {
//		$id = trim($_POST['id']);
		
		$news = \App\Models\News::findByID($_POST['id']);
//		var_dump($news);die;
		$news->title = $_POST['title'];
		$news->text = $_POST['text'];
		$news->author = $_POST['author'];
		$news->update();
		header('Location:http://profit/PHP2/Admin.php');
	} else {
		$news = new \App\Models\News();
		$news->title = $_POST['title'];
		$news->text = $_POST['text'];
		$news->author = $_POST['author'];
		$news->save();
		header('Location:http://profit/PHP2/Admin.php');
	}
	
}
if (isset($_GET['id'])) {
	$news = \App\Models\News::findByID($id);
	if ($reason == 'delete') {
		$news->delete();
		header('Location:http://profit/PHP2/Admin.php');
	} elseif ($reason == 'edit') {
		$v = new \App\View();
		$v->news = $news;
		$template = __DIR__ . '/App/templates/admin_edit.php';
		$v->render($template);
		$v->display($template);
	}
} else {
	if ($reason == 'add') {
		$v = new \App\View();
		$template = __DIR__ . '/App/templates/admin_add.php';
		$v->render($template);
		$v->display($template);
	} else {
		
		 $view->render(__DIR__ . '/App/templates/admin.php');
		 $view->display(__DIR__ . '/App/templates/admin.php');
	}
	
}

?>
