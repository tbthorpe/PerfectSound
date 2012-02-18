<?php
class AppController extends Controller {
	public $components = array(
	        'Acl',
	        'Auth' => array(
	            'authorize' => array(
	                'Actions' => array('actionPath' => 'controllers')
	            )
	        ),
	        'Session'
	    );
	    public $helpers = array('Html', 'Form', 'Session');
		public $uses = array ('Widget');
	    public function beforeFilter() {
	        //Configure AuthComponent
	        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
	        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
	        $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
			$this->Auth->allow('display');
			$this->set('widgets',$this->Widget->find('all'));
	    }
}