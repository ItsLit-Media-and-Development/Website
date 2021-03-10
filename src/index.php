<?php
/**
 * Index of the Site
 *
 * @package		itslit.uk
 * @author		Marc Towler <marc@marctowler.co.uk>
 * @copyright	Copyright (c) 2021 Marc Towler
 * @link		https://www.itslit.uk
 * @since		Version 0.1
 * @filesource
 */
namespace SITE;
error_reporting(E_ALL);
include_once('../vendor/autoload.php');

use SITE\Library;

$timer = new Library\Logger();

$timer->start();

$router = new Library\Router();

$con = '\\SITE\\Controllers\\' . ucfirst($router->getController());

$controller = new $con();


echo $controller->{$router->getMethod()}();

$timer->end();