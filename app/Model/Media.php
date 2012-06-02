<?php
App::uses('AppModel', 'Model');
CakePlugin::load('MeioUpload');
/**
 * Media Model
 *
 */
class Media extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'filename';
	
	var $actsAs = array(
	    'MeioUpload.MeioUpload' => array(
	        'filename' => array(
	            'dir' => 'medialibrary',
	            'create_directory' => true,
	            'allowedMime' => array('image/jpeg', 'image/pjpeg', 'image/png', 'application/pdf'),
	            'allowedExt' => array('.jpg', '.jpeg', '.png','.pdf'),
	        ),
	    )
	);
	var $validate = array(
	    'filename' => array(
	        'Empty' => array(
	            'check' => false
	        )
	    )
	);
}
