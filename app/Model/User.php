<?php
/**
 * User Model
 *
 * @property Group $Group
 */
//App::uses('AppModel', 'Model','AuthComponent', 'Controller/Component');
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {

	public $name = 'User';
	    public $belongsTo = array('Group');
		    public $actsAs = array('Acl' => array('type' => 'requester'));

		    public function parentNode() {
		        if (!$this->id && empty($this->data)) {
		            return null;
		        }
		        if (isset($this->data['User']['group_id'])) {
		            $groupId = $this->data['User']['group_id'];
		        } else {
		            $groupId = $this->field('group_id');
		        }
		        if (!$groupId) {
		            return null;
		        } else {
		            return array('Group' => array('id' => $groupId));
		        }
		    }
	
	public $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	public function beforeSave() {
		$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
		return true;
	}
}
