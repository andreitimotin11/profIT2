<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 15:42
 */
function __autoload($class)
{
	require __DIR__ . '/' . str_replace('\\', '/', $class);
}