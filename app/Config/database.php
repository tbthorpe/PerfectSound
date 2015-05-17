<?php
// 
// class DATABASE_CONFIG {
// 
// 	public $default = array(
// 		'datasource' => 'Database/Mysql',
// 		'persistent' => false,
// 		'host' => '127.0.0.1',
// 		'login' => 'root',
// 		'password' => 'root',
// 		'database' => 'perfectsound',
// 		'prefix' => '',
// 		'encoding' => 'utf8',
// 	);
// 
// 	public $test = array(
// 		'datasource' => 'Database/Mysql',
// 		'persistent' => false,
// 		'host' => 'localhost',
// 		'login' => 'user',
// 		'password' => 'password',
// 		'database' => 'test_database_name',
// 		'prefix' => '',
// 		//'encoding' => 'utf8',
// 	);
// }

class DATABASE_CONFIG {
	
	var $default = null;
	var $local = null;
	var $production = null;
	var $staging = null;
	
	function __construct() {

			
			$this->production = array(
				'datasource' => 'Database/Mysql',
				'persistent' => false,
				'host' => 'localhost',
				'login' => 'pssbuttwad',
				'password' => 'Hell0DollyStickball',
				'database' => 'pss',
				'prefix' => '',
				'encoding' => 'utf8',
			);
			
			$this->local = array(
				'datasource' => 'Database/Mysql',
				'persistent' => false,
				'host' => '127.0.0.1',
				'login' => 'root',
				'password' => 'newyork',
				'database' => 'pss',
				'prefix' => '',
				'encoding' => 'utf8',
			);

		switch($_SERVER['SERVER_NAME']){
			case ('perfectsoundmixing.com'):
			case ('www.perfectsoundmixing.com'):
			case ('50.56.226.115'):
			case ('perfectsoundstudios.com'):
			case ('www.perfectsoundstudios.com'):
			case ('secret.perfectsoundstudios.com'):
				$this->default = $this->production;
				break;
			default:
				 $this->default = $this->local;
			break;			
		}
	}
}
