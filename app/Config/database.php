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
				'host' => 'perfectsoundmixingco.ipowermysql.com',
				'login' => 'perfectsounduser',
				'password' => 'dogLickBalls',
				'database' => 'perfectsoundstudio',
				'prefix' => '',
				'encoding' => 'utf8',
			);
			
			$this->local = array(
				'datasource' => 'Database/Mysql',
				'persistent' => false,
				'host' => 'localhost',
				'login' => 'root',
				'password' => 'root',
				'database' => 'perfectsound',
				'prefix' => '',
				'encoding' => 'utf8',
			);


		switch($_SERVER['SERVER_NAME']){
			case ('perfectsoundmixing.com'):
			case ('www.perfectsoundmixing.com'):
				$this->default = $this->production;
			break;
			case ('perfectsound.local'):
				 $this->default = $this->local;
			break;			
		}
	}
}