<?php
App::uses('AppModel', 'Model');
/**
 * Section Model
 *
 */
class News extends AppModel {

	public $hasMany = array(

		'Images'=>array(
			'className' => 'Asset',
			'foreignKey' => 'foreign_id',
			'conditions' => array('Images.class'=>'News','Images.type'=>'blogimg'),
			)
		);

}
