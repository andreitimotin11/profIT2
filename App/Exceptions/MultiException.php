<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 04.08.2017
 * Time: 03:34
 */

namespace App\Exceptions;


use App\TCollection;

class MultiException
extends \Exception
implements \ArrayAccess, \Iterator
{
	use TCollection;
}