<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 04.08.2017
 * Time: 00:23
 */

namespace App\Controllers;


use App\Models\News;
use App\View;

class Admin
extends Controller
{
	public function __construct()
	{
		$this->view = new View();
	}
	
	public function actionIndex()
	{
		// Aratam toate stirile
		
		$this->view->title = 'News';
		$this->view->news = News::findAll();
		$reason = trim($_GET['reason']);
		$id = trim($_GET['id']);
		if ($_POST['title']) {
			if (!empty($_POST['id'])) {
//		$id = trim($_POST['id']);
				
				$news = News::findByID($_POST['id']);
//		var_dump($news);die;
				$news->title = $_POST['title'];
				$news->text = $_POST['text'];
				$news->author = $_POST['author'];
				$news->update();
				header('Location:http://profit/PHP2/index.php?ctrl=admin&action=Index');
			} else {
				$news = new News();
				$news->title = $_POST['title'];
				$news->text = $_POST['text'];
				$news->author = $_POST['author'];
				$news->save();
				header('Location:http://profit/PHP2/index.php?ctrl=admin&action=Index');
			}
			
		}
		if (isset($_GET['id'])) {
			$news = News::findByID($id);
			if ($reason == 'delete') {
				$news->delete();
				header('Location:http://profit/PHP2/index.php?ctrl=admin&action=Index');
			} elseif ($reason == 'edit') {
				$v = new View();
				$v->news = $news;
				$template = __DIR__ . '/../templates/admin_edit.php.php';
				$v->render($template);
				$v->display($template);
			}
		} else {
			if ($reason == 'add') {
				$v = new \App\View();
				$template = __DIR__ . '/../templates/admin_add.php';
				$v->render($template);
				$v->display($template);
			} else {
				
				$this->view->render(__DIR__ . '/../templates/admin.php');
				$this->view->display(__DIR__ . '/../templates/admin.php');
			}
			
		}
	}
}