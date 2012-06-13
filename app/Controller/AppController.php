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
		public $uses = array ('Widget','Footerlink');
	    public function beforeFilter() {
	        //Configure AuthComponent
	        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
	        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
	        $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
			$this->Auth->allow('display');
			$this->set('widgets',$this->Widget->find('all', array('order'=> array('Widget.ordernum'=>'asc'))));
			$this->set('footerlinks',$this->Footerlink->find('all', array(
					'order'=> array('Footerlink.order'=>'asc'),
					'conditions'=>array('Footerlink.visible'=>1)
				)));
	    }
}