<?php
/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 23/2/2017
 * Time: 8:58 AM
 */
spl_autoload_register(function ($class) {
    $filename = CLASS_PATH . "\\{$class}.php";
    if (!file_exists($filename)) {
        return false;
    }
    include $filename;
    return true;
});