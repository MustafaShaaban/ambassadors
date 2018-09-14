<?php
/**
 * Created by PhpStorm.
 * User: Mustafa Shaaban
 * Date: 9/14/2018
 * Time: 7:45 PM
 */

namespace PHPMVC;
use PHPMVC\CORE\Frontcontroller;

include '../App/Config/config.php';
include APP_PATH . DS . 'Core' . DS . 'autoload.php';

$frontController = new Frontcontroller();

echo "INDEX";
