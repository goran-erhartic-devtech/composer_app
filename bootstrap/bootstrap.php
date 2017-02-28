<?php
/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 23/2/2017
 * Time: 8:38 AM
 */
// Define a path where Classes will be stored
define("CLASS_PATH", dirname(__DIR__) . "\\src");

// Include the core autoloader.
require_once __DIR__ . '/../src/autoloader.php';

//Include composer autoload.
require_once __DIR__ . '/../vendor/autoload.php';
