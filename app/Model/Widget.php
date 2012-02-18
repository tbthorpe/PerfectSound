<?php
App::uses('AppModel', 'Model');

class Widget extends AppModel {

	public $displayField = 'title';

	public $hasOne = array(
		'WidgImg'=>array(
			'className' => 'Asset',
			'foreignKey' => 'foreign_id',
			'conditions' => array('WidgImg.class'=>'Sections','WidgImg.type'=>'wigige'),
			)
		);
}
