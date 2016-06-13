<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/index', array('controller' => 'index', 'action' => 'index'));
	Router::connect('/registerForFree', array('controller' => 'index', 'action' => 'registerForFree'));
	Router::connect('/contactUs', array('controller' => 'index', 'action' => 'contactUs'));
	Router::connect('/advertiseWithUs', array('controller' => 'index', 'action' => 'adsWithUs'));
	Router::connect('/doLogin', array('controller' => 'index', 'action' => 'doLogin'));
	Router::connect('/adminLogin', array('controller' => 'index', 'action' => 'adminLogin'));
	Router::connect('/doLogout', array('controller' => 'index', 'action' => 'doLogout'));
	Router::connect('/successStories', array('controller' => 'index', 'action' => 'successStories'));
	
	Router::connect('/search/*', array('controller' => 'users', 'action' => 'search'));
	Router::connect('/editProfile/*', array('controller' => 'users', 'action' => 'editProfile'));
	Router::connect('/userProfile/*', array('controller' => 'users', 'action' => 'userProfile'));
	Router::connect('/changePassword', array('controller' => 'users', 'action' => 'changePassword'));
	
	Router::parseExtensions('html', 'rss');
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
//	Router::connect('/index/*', array('controller' => 'index', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
