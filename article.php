<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 29.07.2017
 * Time: 13:10
 */
//article.php?id=NNN - отображает новость номер NNN с полным текстом

//$v3 = new \Models\View();
require __DIR__ . '/autoload.php';
$h1 = new \App\Models\News();
$id = $_GET['id'];
$article = $h1->getArticleById($id);
//$v3->assign('article', $article);
//$v3->display(__DIR__ . '/templates/article.php');
include __DIR__ . '/templates/article.php';
?>

