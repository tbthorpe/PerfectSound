<?php
App::uses('AppController', 'Controller');
/**
 * Footerlinks Controller
 *
 * @property Footerlink $Footerlink
 */
class FooterlinksController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout='admin';
		$this->Footerlink->recursive = 0;
		$this->set('footerlinks', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout='admin';
		$this->Footerlink->id = $id;
		if (!$this->Footerlink->exists()) {
			throw new NotFoundException(__('Invalid link'));
		}
		$this->set('footerlink', $this->Footerlink->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->Footerlink->create();
			if ($this->Footerlink->save($this->request->data)) {
				$this->Session->setFlash(__('The link has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The link could not be saved. Please, try again.'));
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
		$this->layout='admin';
		$this->Footerlink->id = $id;
		if (!$this->Footerlink->exists()) {
			throw new NotFoundException(__('Invalid footerlink'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Footerlink->save($this->request->data)) {
				$this->Session->setFlash(__('The link has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The link could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Footerlink->read(null, $id);
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
		$this->Footerlink->id = $id;
		if (!$this->Footerlink->exists()) {
			throw new NotFoundException(__('Invalid footerlink'));
		}
		if ($this->Footerlink->delete()) {
			$this->Session->setFlash(__('Footerlink deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Footerlink was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
