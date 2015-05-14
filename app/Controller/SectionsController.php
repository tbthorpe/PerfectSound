<?php
App::uses('AppController', 'Controller');
/**
 * Sections Controller
 *
 * @property Section $Section
 */
class SectionsController extends AppController {
	public $uses = array('Section','News','Person','Asset');
	public $helpers = array("BlogImage");
	var $paginate = array('News'=>array('limit'=>5, 'order'=>array('News.displaydate'=>'DESC')));

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('blank','view','homepage','theblog','theteam','thegear','update_order');
	}
	
	public function index() {
		$this->layout='admin';
		$this->Section->recursive = 0;
		$this->set('sections', $this->paginate());
	}

	public function view($id = null) {

		$this->Section->id = $id;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		$this->set('section', $this->Section->read(null, $id));
		$news = $this->News->getSomeHeadlines(5);
		$this->set('news',$news);
	}
    public function blank() {
        $this->layout = null;
    }
	public function homepage(){
		$this->Section->id = 9;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		$this->set('section', $this->Section->read(null,9));
		$news = $this->News->getSomeHeadlines(5);
		$this->set('news',$news);
	}
	
	public function theteam(){
		$this->Section->id = TEAM;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		$this->set('section', $this->Section->read(null,TEAM));
		$news = $this->News->getSomeHeadlines(5);
		$this->set('news',$news);
		$team = $this->Person->getFullTeam();
		$this->set('team',$team);
	}
	
	public function theblog(){
		$this->layout='default';
		$this->Section->id = NEWS;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		$this->set('section', $this->Section->read(null,NEWS));
		$this->set('news', $this->paginate($this->News));
	}
	
	public function thegear(){
		$this->layout='default';
		$this->Section->id = GEAR;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		$this->set('section', $this->Section->read(null,GEAR));
		$news = $this->News->getSomeHeadlines(5);
		$this->set('news',$news);
	}

	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->Section->create();
			debug($this->request->data);
			if ($this->Section->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The section has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		$this->layout='admin';
		$this->Section->id = $id;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Section->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The section has been saved'));
				if (!empty($this->data['todelete'])){
					foreach (array_keys($this->data['todelete']) as $image){
						$this->Section->Slides->delete($image);
					}
				}
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.'));
			}
		} else {
			// debug($this->Section->read(null, $id));
			$this->request->data = $this->Section->read(null, $id);
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
		$this->Section->id = $id;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		if ($this->Section->delete()) {
			$this->Session->setFlash(__('Section deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Section was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	function update_order() {
		// debug($_GET['w']);
		
		foreach ($_GET['w'] as $order => $id) {
			
			$this->Asset->id = $id;
			//debug($this->Widget->id);
			$this->Asset->saveField('order', $order);
		}
		$this->render(false);
	}
}
