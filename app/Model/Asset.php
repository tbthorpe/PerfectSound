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
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
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