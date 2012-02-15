<?php
App::uses('AppModel', 'Model');
/**
 * Section Model
 *
 */
class Section extends AppModel {

	public $hasMany = array(

		'Slides'=>array(
			'className' => 'Asset',
			'foreignKey' => 'foreign_id',
			'conditions' => array('Slides.class'=>'Sections','Slides.type'=>'slideshow'),
			),
		'MainImage'=>array('className' => 'Asset',
							'foreignKey' => 'foreign_id',
							'conditions' => array('MainImage.class'=>'Sections','MainImage.type'=>'mainimage'),
							'dependent' => true)
		);
	// public $hasOne = array('MainImage'=>array('className' => 'Asset',
	// 									'foreignKey' => 'foreign_id',
	// 									'conditions' => array('MainImage.class'=>'Sections','MainImage.type'=>'mainimage'),
	// 									'dependent' => true)
	// 									);

}
