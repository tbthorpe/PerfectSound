<?php
App::uses('AppModel', 'Model');
/**
 * Person Model
 *
 */
class Person extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	
	public $hasOne = array(
		'MugShot'=>array(
			'className' => 'Asset',
			'foreignKey' => 'foreign_id',
			'conditions' => array('MugShot.class'=>'People','MugShot.type'=>'mugshot'),
			)
		);
		
	public function getFullTeam(){
		return $this->find('all',array(
			'conditions'=>array('Person.visible'=>1),
			'order'=>array('Person.order ASC')
		));
	}
}
