<?php
App::uses('AppController', 'Controller');
/**
 * People Controller
 *
 * @property Person $Person
 */
class PeopleController extends AppController {
	public $paginate = array(
	        'order' => array(
	            'Person.order' => 'asc'
	        )
	    );

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('update_order');
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout='admin';
		$this->Person->recursive = 0;
		$this->set('people', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout='admin';
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		$this->set('person', $this->Person->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->Person->create();
			if ($this->Person->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The person has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout="admin";
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Person->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The person has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Person->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		if ($this->Person->delete()) {
			$this->Session->setFlash(__('Person deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Person was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	function update_order() {
		foreach ($_GET['w'] as $order => $id) {
			$this->Person->id = $id;
			$this->Person->saveField('order', $order);
		}
		$this->render(false);
	}
}
