<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'sections', 'action' => 'homepage'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	
	//SECTIONS
	Router::connect('/the-house', array('controller' => 'sections', 'action' => 'view',1));
	Router::connect('/the-studio', array('controller' => 'sections', 'action' => 'view',2));
	Router::connect('/the-team', array('controller' => 'sections', 'action' => 'view',5));
	Router::connect('/the-experience', array('controller' => 'sections', 'action' => 'view',6));
	Router::connect('/the-rates', array('controller' => 'sections', 'action' => 'view',7));
	Router::connect('/the-gear', array('controller' => 'sections', 'action' => 'view',8));
	
	Router::connect('/perfect-sound-blog', array('controller' => 'news', 'action' => 'index'));
	
	// User login - admin stuff for now
	Router::connect('/admin', array('controller'=>'sections','action'=>'index','admin'=>true));

/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
