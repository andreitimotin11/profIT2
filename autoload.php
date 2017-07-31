<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 15:42
 */

function __autoload($class)
{
	$className = str_replace('\\', '/', $class);
//	var_dump(__DIR__ . '/' . $className . '.php');
	require __DIR__ . '/' . $className . '.php';

	
}