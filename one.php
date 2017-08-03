<?php

require __DIR__ . '/autoload.php';

$data =\App\Models\News::findAll();

$controller = new \App\Controllers\News();
$controller->action('One');
//$view->users = \App\Models\User::findAll();
//echo count($view) ;