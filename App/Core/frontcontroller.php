<?php
/**
 * Created by PhpStorm.
 * User: Mustafa Shaaban
 * Date: 9/14/2018
 * Time: 10:53 PM
 */

namespace PHPMVC\CORE;

class Frontcontroller {

//	const NOT_FOUND_CLASS = 'PHPMVC\CONTROLLERS\NotFoundController';
//	const NOT_FOUND_ACTION = 'notFoundAction';

	/**
	 * The name of controller class.
	 *
	 * @access   private
	 * @var      string    $plugin_name    The name of controller class.
	 *
	 */
	private $_controller = 'index';

	/**
	 * The name of view method.
	 *
	 * @access   private
	 * @var      string    $_action    The name of view method.
	 *
	 */
	private $_action = 'default';

	/**
	 * Array of url queries.
	 *
	 * @access   private
	 * @var      array    $_param    Array of url queries.
	 *
	 */
	private $_param = [];

	/**
	 * Set class properties by calling _parseUrl method
	 */
	public function __construct() {
		$this->_parseUrl();
	}


	/**
	 * Separate URL path
	 */
	private function _parseUrl() {
		$url = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'), 3);
		if(isset($url[0]) && $url[0] != ''){
			$this->_controller = $url[0];
		}
		if(isset($url[1]) && $url[1] != ''){
			$this->_action = $url[1];
		}
		if(isset($url[2]) && $url[2] != ''){
			$this->_param = explode('/', $url[2]);
		}
	}




	/**
	 * dispatching methods
	 */
	public function dispatch() {
		$controllerClassName = 'PHPMVC\CONTROLLERS\\' . ucfirst($this->_controller) . 'Controller';
		if (!class_exists($controllerClassName)) {
			$controllerClassName = 'PHPMVC\CONTROLLERS\NotFoundController';
		}
		$controller = new $controllerClassName;
		$actionName = lcfirst($this->_action) . 'Action';

		if (!method_exists($controller, $actionName)) {
			$actionName = 'notFoundAction';
		}
		$controller->$actionName();
		echo "<br>" . $controllerClassName . "</br>";
		echo $actionName;
	}
}