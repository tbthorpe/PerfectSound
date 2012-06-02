<?php
App::uses('AppController', 'Controller');
/**
 * Sections Controller
 *
 * @property Section $Section
 */
class NewsController extends AppController {
	public $helpers = array("BlogImage");

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index','view');
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		// $this->News->recursive = 1;
		$this->paginate = array('order'=>array('News.created'=>'DESC'));
		$this->set('news', $this->paginate());
	}
	
	public function loggedinindex() {
		//$this->News->recursive = 0;
		$this->layout='admin';
		$this->paginate = array('order'=>array('News.created'=>'DESC'));
		$this->set('news', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($permalink = null) {
		$post = $this->News->findBySlug($permalink);
		if (!$post){
			throw new NotFoundException(__('Invalid news'));
		}
		$headlines = $this->News->getSomeHeadlines(3);
		$this->set('headlines',$headlines);
		$this->set('news', $post);
	}
	
	public function admin_view($id = null) {
		$this->layout='admin';
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Invalid news'));
		}
		$this->set('news', $this->News->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->News->create();
			if ($this->News->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved'));
				$this->redirect(array('action' => 'loggedinindex'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
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
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Invalid post thing'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->News->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The section has been saved'));
				if (!empty($this->data['todelete'])){
					foreach (array_keys($this->data['todelete']) as $image){
						$this->News->Images->delete($image);
					}
				}
				$this->redirect(array('action' => 'loggedinindex'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			// debug($this->Section->read(null, $id));
			$this->request->data = $this->News->read(null, $id);
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
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		if ($this->News->delete()) {
			$this->Session->setFlash(__('Post deleted'));
			$this->redirect(array('action' => 'loggedinindex'));
		}
		$this->Session->setFlash(__('Post was not deleted'));
		$this->redirect(array('action' => 'loggedinindex'));
	}
	
	
}
