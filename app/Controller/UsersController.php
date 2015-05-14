<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	public function beforeFilter() {
	    parent::beforeFilter();
	    // $this->Auth->allow('login','logout','requestRates','initDB');
	$this->Auth->allow('*');
	}
	public function initDB() {
	    $group = $this->User->Group;
	    //Allow admins to everything
	    $group->id = 1;
	    $this->Acl->allow($group, 'controllers');

	    //allow managers to posts and widgets
	    $group->id = 2;
	    $this->Acl->deny($group, 'controllers');
	    $this->Acl->allow($group, 'controllers/Sections');
		$this->Acl->allow($group, 'controllers/News');
		// $this->Acl->allow($group, 'controllers/Media');
		// $this->Acl->allow($group, 'controllers/Media');
	
	    // $group->id = 3;
	    // $this->Acl->deny($group, 'controllers');
	    // $this->Acl->allow($group, 'controllers/Sections');

	    //we add an exit to avoid an ugly "missing views" error message
	    echo "all done";
	    exit;
	}

	public function login() {
		$this->layout='admin';
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash('Your username or password was incorrect.');
	        }
	    }
		if ($this->Session->read('Auth.User')) {
		        $this->Session->setFlash('You are logged in!');
		        $this->redirect('/', null, false);
		    }
	}

	public function logout() {
	    $this->Session->setFlash('Good-Bye');
		$this->redirect($this->Auth->logout());
	}
	public function index() {
		$this->layout='admin';
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout='admin';
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout='admin';
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
		public function requestRates($email = NULL, $comments = NULL){

			if ($this->params['pass'][0]){
							$email = addslashes($this->params['pass'][0]);
						}
						if ($this->params['pass'][1]){
							$comments = addslashes($this->params['pass'][1]);
						}
			// $this->autoLayout = $this->autoRender = false; 
			$this->autoRender = false; 
			$this->layout = 'ajax';
			debug($this->params['pass']);
			if ($this->request->is('ajax')){
				$query = sprintf("INSERT INTO rateinquiries (`email`,`comments`,`created`) VALUES ('%s','%s',NOW())",
				            mysql_escape_string($email),
				            mysql_escape_string($comments));
				debug($query);
				$this->User->query($query);
				$to = "info@perfectsoundstudios.com";
				$subject = "PSS RATE INQUIRY";
				$message = "From: " . $email . "\n\n" . $comments."\n\nSubmitted via perfectsoundstudios.com";
				$from = $email;
				$headers = "From:" . $from;
                $headers = 'From: '.$from . "\r\n" .
                        'Reply-To: '.$from. "\r\n" .
                            'X-Mailer: PHP/' . phpversion();
				mail($to,$subject,$message,$headers);
				//$this->Email->smtpOptions = array(
				//'port'=>'465',
				//'timeout'=>'30',
				//'host' => 'ssl://smtp.gmail.com',
				//'username'=>'tbthorpe@gmail.com',
				//'password'=>'15#?*N468I(e',
				//);

				//$this->Email->from = 'Test Guy';
				//$this->Email->delivery = 'smtp';
				//$this->Email->sendAs = 'html';

				//$this->Email->to = 'tbthorpe@gmail.com';
				//$this->Email->subject = "hey tim whats good";
				//$this->Email->send();
								//CakeEmail::deliver('tbthorpe@gmail.com', 'SUBBY', 'Message', array('from' => 'tim@paddle8.com'));
				//$Email = new CakeEmail();
				//$Email->from(array('tim@paddle8.com' => 'My Site'));
				//$Email->to('tbthorpe@gmail.com');
				//$Email->subject('About');
				//$Email->send($message);
				echo "done";
				//debug($this->params['pass']);
			}
			
		}
}
