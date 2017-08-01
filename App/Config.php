<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 01.08.2017
 * Time: 23:21
 */

namespace App;
/*
Добавьте в свое приложение класс App\Config. Сделайте его синглтоном.
Объект этого класса при создании должен читать и сохранять в себе файл конфигурации. Его применение:
$config = App\Config::instance();
echo $config->data['db']['host'];
 */

class Config
{
	use Singleton;
	
	const FILE_CONFIG = __DIR__ . '/../config.txt';
	public $file = [];
	public $data;
	
	protected function __construct()
	{
		$this->file = file(self::FILE_CONFIG);
		$configGroup = '';
		foreach ($this->file as $configStrings) {
			if (false === stripos($configStrings, '=')){
				$configGroup = trim($configStrings);
			}else{
				$key = explode('=', $configStrings)[0];
				$value = explode('=', $configStrings)[1];
				$this->data[$configGroup][$key] = trim($value);
			}
		}
//		var_dump($this->data);
		return $this->data;
	}
}