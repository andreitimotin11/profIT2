<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 02.08.2017
 * Time: 15:00
 */

namespace App;


class View
{
	use SetTrait;
	
	public function display($template)
	{
	/*	foreach ($this->data as $k => $v) {
			$$k = $v;
		}*/
		echo $this->render($template);
	}
	public function render($template)
	{
		foreach ($this->data as $prop => $value) {
			$$prop = $value;
		}
		ob_start();
		include $template;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
}