<?php
class AppController extends Controller{
	
	public $components = array(
				'Session',
				'Auth'=>array(
					'loginRedirect'=>array('controller'=>'users','action'=>'index'),
					'logoutRedirect'=>array('controller'=>'sections','action'=>'view',1),
					'authError'=>'You cannot access this page',
					'authorize'=>array('Controller')
					
				)
			);
	
	public function isAuthorized($user){
		return true;
	}
	
	public function beforeFilter(){
		$this->Auth->deny('admin_index','admin_edit','admin_add','admin_view','admin_delete');
		$this->Auth->allow('index','view');
	}

}


