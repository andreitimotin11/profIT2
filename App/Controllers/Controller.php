<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 03.08.2017
 * Time: 23:29
 */

namespace App\Controllers;


class Controller
{
	public function action($action, $params)
	{
		$methodName = 'action' . $action;
		$this->beforeAction();
		return $this->$methodName($params);
	}
}