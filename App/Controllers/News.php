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
	extends Controller
{
	protected $view;
	
	public function __construct()
	{
		$this->view = new View();
	}
	
	
	protected function beforeAction()
	{
		$ex = new \Exception('Mesaj despre exceptie');
//		throw $ex;
	}
	
	protected function actionIndex()
	{
		$this->view->title = 'My cool site';
		$this->view->news = \App\Models\News::findAll();
		
		$this->view->display(__DIR__ . '/../templates/index.php');
	}
	
	protected function actionOne($params)
	{
//		var_dump($params);
		foreach ($params as $param) {
			$arr = explode('=', $param);
			$var_name = $arr[0];
			$var_value = $arr[1];
			$$var_name = $var_value;
		}
		
		$this->view->article = \App\Models\News::findByID((int)$id);
		$this->view->display(__DIR__ . '/../templates/one.php');
	}
}