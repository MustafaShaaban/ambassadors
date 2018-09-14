<?php
/**
 * Created by PhpStorm.
 * User: Mustafa Shaaban
 * Date: 9/14/2018
 * Time: 8:03 PM
 */

namespace PHPMVC\CORE;


/**
 * Class Autoload
 * @package PHPMVC\CORE
 * @author Mustafa Shaaban
 * @version 0.1
 */
class Autoload {
    public static function autoload($className) {

        $className = str_replace('PHPMVC' , '', $className);
        $className = str_replace('\\' , '/', $className);
        $className = $className . '.php';
        $className = strtolower($className);
        if(file_exists(APP_PATH . $className)){
            require_once APP_PATH . $className;
        }

    }
}
spl_autoload_register(__NAMESPACE__ . '\Autoload::autoload');