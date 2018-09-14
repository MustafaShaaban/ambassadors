<?php
/**
 * Created by PhpStorm.
 * User: Mustafa Shaaban
 * Date: 9/14/2018
 * Time: 8:01 PM
 */

// Define Directory separator
define('DS', DIRECTORY_SEPARATOR);

// Define App directory path
define('APP_PATH', dirname(realpath(__FILE__)) . DS . '..');

// Define Views directory path
define('VIEW_PATH', APP_PATH . DS . 'views');

// Define Models directory path
define('MODEL_PATH', APP_PATH . DS . 'models');

// Define Template directory path
define('TMP_PATH', APP_PATH . DS . 'template');

// Define Css directory path
define('CSS', DS . 'css' . DS );

// Define javascript directory path
define('JS', DS . 'js' . DS );