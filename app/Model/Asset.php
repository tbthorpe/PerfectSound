<?php
App::uses('AppModel', 'Model');
CakePlugin::load('MeioUpload');
/**
 * Section Model
 *
 */
class Asset extends AppModel {
	var $actsAs = array(
	    'MeioUpload.MeioUpload' => array(
	        'filename' => array(
	            'dir' => 'img{DS}Assets',
	            'create_directory' => true,
	            'allowedMime' => array('image/jpeg', 'image/pjpeg', 'image/png','application/pdf'),
	            'allowedExt' => array('.jpg', '.jpeg', '.png', '.pdf'),
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