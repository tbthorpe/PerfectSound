<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {
	
	
	public function beforeSave(){
		if(isset($this->data['User']['password'])){
			$this->data['User']['password']=AuthComponent::password($this->data['User']['password']);
		}
		return true;
	}
}
