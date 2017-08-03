<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 03.08.2017
 * Time: 20:34
 */

namespace App\Controllers;


use App\View;

class News
{
	protected $view;
	
	public function __construct()
	{
		$this->view = new View();
	}
	
	public function action($action)
	{
		$methodName = 'action' . $action;
//		$this->beforeAction();
		return $this->$methodName();
	}
	
	protected function beforeAction()
	{
		echo 'Contor';
	}
	
	protected function actionIndex()
	{
		$this->view->title = 'My cool site';
		$this->view->news = \App\Models\News::findAll();
		
		$this->view->display(__DIR__ . '/../templates/index.php');
	}
	
	protected function actionOne()
	{
		$id = (int)$_GET['id'];
		$this->view->article = \App\Models\News::findByID($id);
		$this->view->display(__DIR__ . '/../templates/one.php');
	}
}