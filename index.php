<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 31.07.2017
 * Time: 14:09
 */
require __DIR__ . '/autoload.php';

$users =\App\Models\User::findAll();
var_dump($users );